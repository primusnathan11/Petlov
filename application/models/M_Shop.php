<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Shop_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class M_Shop extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
	date_default_timezone_set("Asia/Bangkok");
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function product_list()
  {
    $this->db->select('*');
    $this->db->from('produk');
    $this->db->join('petshop','petshop.id_petshop = produk.id_petshop');
    $query = $this->db->get()->result();
    return $query;
  }

	public function add_to_cart(){
		$tambah = array(
			'id_produk' =>$this->input->post('id_produk'),
			'qty'=>$this->input->post('qty'),
			'total_harga' =>$this->input->post('total_harga'),
			'id_petshop' =>$this->input->post('id_petshop'),
			'id_user' =>$this->session->userdata('id_user')
	);
		return $this->db->insert('cart', $tambah);
	}

  public function get_cart(){
    $this->db->select('*');
    $this->db->from('cart');
    $this->db->join('produk','produk.id_produk=cart.id_produk');
    $this->db->where('id_user',$this->session->userdata('id_user'));
    $query = $this->db->get()->result();
    return $query;
  }

  public function detail_cart($id_cart=''){
	return $this->db->join('produk','produk.id_produk=cart.id_produk')->where('id_cart', $id_cart)->get('cart')->row();
  }

  public function edit_cart(){
    $dt_up_produk=array(
        'qty'=>$this->input->post('qty'),
        'total_harga'=>$this->input->post('total_harga')
    );
    return $this->db->where('id_cart', $this->input->post('id_cart'))->update('cart', $dt_up_produk);
	}
	
	public function hapus_isi_cart($id_cart){
		$this->db->where('id_cart', $id_cart);
		return $this->db->delete('cart');
	}
	
	public function sumharga(){
	$query = $this->db->select('SUM(total_harga) as sumharga')->from('cart')->where('id_user', $this->session->userdata('id_user'))->get();
    return $query->row()->sumharga;
	}

	public function add_transaksi(){
    $sumharga = $this->sumharga();
    $data_transaksi = array(
        'id_user'=>$this->session->userdata('id_user'),
		'tanggal_transaksi'=>date("Y-m-d H:i:s"),
		'status'=>"Menunggu Pembayaran",
        'payment'=>$this->input->post('payment'),
        'total_harga'=> $sumharga,
        'alamat_pengiriman'=>$this->input->post('alamat_pengiriman')
    );
    
    $this->db->insert('transaksi',$data_transaksi);
    $id_transaksi = $this->db->insert_id();
    $this->add_detail_transaksi($id_transaksi);
	$get_id_user = $this->session->userdata('id_user');

	$this->remove_cart_checkout();

}


public function add_detail_transaksi($id_transaksi){
    $q = $this->db->get('cart')->result(); 
    foreach($q as $r) {
        $data_detail_transaksi = array(
            'id_transaksi'=>$id_transaksi,
            'id_produk'=>$r->id_produk,
            'qty'=>$r->qty,
            'harga'=>$r->total_harga,
            'id_petshop'=>$r->id_petshop,
            'id_user'=>$this->session->userdata('id_user')
        );
		$getproduk = $this->db->get_where('produk', array('id_produk' => $r->id_produk));
   		$data_produk = array(
      	'stok' => (int)$getproduk->result()[0]->stok - (int)$r->qty
   		);
    	$this->db->where('id_produk', $r->id_produk);
    	$this->db->update('produk', $data_produk); 
        $this->db->insert('detail_transaksi', $data_detail_transaksi);
    }
}

public function remove_cart_checkout(){
    $this->db->where('id_user', $this->session->userdata('id_user'));
    return $this->db->delete('cart');
}

public function get_activities(){
	$this->db->select('*');
	$this->db->select('DATE_FORMAT(tanggal_transaksi, "%W %e %M %Y %k:%i WIB") as tgl_transaksi', FALSE);
	$this->db->from('transaksi');
	$this->db->where('transaksi.id_user',$this->session->userdata('id_user'));
	$this->db->where_not_in('status', 'Pesanan Diterima');
	$query = $this->db->get()->result();
	return $query;
}

public function lihat_detail($id_transaksi){
	$this->db->select('*');
	$this->db->select('DATE_FORMAT(tanggal_transaksi, "%W %e %M %Y %k:%i WIB") as tgl_transaksi', FALSE);
	$this->db->from('transaksi');
	$this->db->join('detail_transaksi','detail_transaksi.id_transaksi=transaksi.id_transaksi');
	$this->db->join('produk','produk.id_produk=detail_transaksi.id_produk');
	$this->db->where('detail_transaksi.id_transaksi',$id_transaksi);
	$query = $this->db->get()->result();
	return $query;
}
public function grand_total($id_transaksi){
			$query = $this->db->select('total_harga as grand_total')->from('transaksi')->where('id_transaksi', $id_transaksi)->get();
			return $query->row()->grand_total;
}

public function get_all_transaksi(){
	$this->db->select('*');
	$this->db->select('DATE_FORMAT(tanggal_transaksi, "%W %e %M %Y %k:%i WIB") as tgl_transaksi', FALSE);
	$this->db->from('transaksi');
	$this->db->join('user','user.id_user = transaksi.id_user');
	$this->db->join('bukti_pembayaran','bukti_pembayaran.id_transaksi = transaksi.id_transaksi');
	$query = $this->db->get()->result();
	return $query;
}

public function detail_transaksi($id_transaksi=''){
	return $this->db->where('id_transaksi', $id_transaksi)->get('transaksi')->row();
}


public function upload_bukti($nama_file){
	if ($nama_file == "") {
			$tambah = array(
					'id_transaksi'=>$this->input->post('id_transaksi')
			);
	} else {
			$tambah = array(
					'id_transaksi'=>$this->input->post('id_transaksi'),
					'foto_bukti'=>$nama_file
			);
	}
	return $this->db->insert('bukti_pembayaran', $tambah);
}

public function pesanan_penjual(){
	$this->db->select('DISTINCT(transaksi.id_transaksi)');
	$this->db->select('user.nama_user, transaksi.tanggal_transaksi, transaksi.total_harga, transaksi.status, transaksi.no_resi');
	$this->db->select('DATE_FORMAT(tanggal_transaksi, "%W %e %M %Y %k:%i WIB") as tgl_transaksi', FALSE);
	$this->db->from('transaksi');
	$this->db->join('user','user.id_user=transaksi.id_user');
	$this->db->join('detail_transaksi','detail_transaksi.id_transaksi=transaksi.id_transaksi');
	$this->db->join('bukti_pembayaran','bukti_pembayaran.id_transaksi=transaksi.id_transaksi');
	$this->db->where('detail_transaksi.id_petshop',$this->session->userdata('id_petshop'));
	$this->db->where_not_in('status', 'Pesanan Diterima');
	$query = $this->db->get()->result();
	return $query;
}

public function status_diproses($id_transaksi){
	$data_update=array(
			'status'=>'Pesanan Diproses'
	);
	$this->db->where('id_transaksi',$id_transaksi);
	$this->db->update('transaksi',$data_update );
}

public function status_dikirim(){
	$data_update=array(
			'status'=>'Sedang Dikirim',
			'no_resi'=>$this->input->post('no_resi')
	);
	$this->db->where('id_transaksi',$this->input->post('id_transaksi'));
	$this->db->update('transaksi',$data_update );
}

public function status_selesai($id_transaksi){
	$data_update=array(
			'status'=>'Pesanan Selesai'
	);
	$this->db->where('id_transaksi',$id_transaksi);
	$this->db->update('transaksi',$data_update );
}


  // ------------------------------------------------------------------------

}

/* End of file Shop_model.php */
/* Location: ./application/models/Shop_model.php */
