<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('M_Shop');
		date_default_timezone_set("Asia/Bangkok");
  }

  public function index()
  {
	$data['produk'] = $this->M_Shop->product_list();
    $this->load->view('v_shop', $data);
  }
	
	public function add_to_cart(){
	$tambah=$this->M_Shop->add_to_cart();
    if($tambah == TRUE){
		$this->session->set_flashdata('pesan', 'Produk telah ditambahkan ke keranjang');
	} else {
		$this->session->set_flashdata('gagal', 'Produk gagal dimasukkan ke keranjang');
	}
	redirect(base_url('Shop/index'), 'refresh');	
	}

	public function view_cart(){
	$data['produk'] = $this->M_Shop->get_cart();
	$data['sumharga']= $this->M_Shop->sumharga();
    $this->load->view('v_cart', $data);
	}

	public function get_detail_cart($id_cart=''){
	$data_detail=$this->M_Shop->detail_cart($id_cart);
	echo json_encode($data_detail);
	}

	public function edit_cart(){
        $proses_update=$this->M_Shop->edit_cart();
        if($proses_update){
           $this->session->set_flashdata('pesan', 'Update cart berhasil');
        }
        else{
            $this->session->set_flashdata('gagal', 'Update cart gagal');
        }
        redirect(base_url('Shop/view_cart'), 'refresh');
	}

	public function hapus_isi_cart($id_cart){
		$hapus=$this->M_Shop->hapus_isi_cart($id_cart);
		if($hapus == TRUE){
			$this->session->set_flashdata('pesan', 'Produk telah dihapus dari keranjang');
		} else {
			$this->session->set_flashdata('gagal', 'Produk gagal dihapus dari keranjang');
		}
		redirect(base_url('Shop/view_cart'), 'refresh');
	}

	public function form_checkout()
	{
    if($this->session->userdata('logged_in')== TRUE){
        $data['cart']=$this->M_Shop->get_cart();
		$data['sumharga']= $this->M_Shop->sumharga();
		$this->load->view('v_form_checkout', $data);
        }
	}
	public function checkout()
	{
	$tambah=$this->M_Shop->add_transaksi();
	redirect(base_url('Shop/pesanan'), 'refresh');
	}

	public function pesanan(){
		if($this->session->userdata('logged_in')==TRUE){
			$data['activities']=$this->M_Shop->get_activities();
			$this->load->view("v_pesanan", $data);
		}
	}

	public function lihat_detail($id_transaksi){
		if($this->session->userdata('logged_in')==TRUE){
			$data['id_trans'] = $id_transaksi;
			$data['grand_total']= $this->M_Shop->grand_total($id_transaksi);
			$data['detail']=$this->M_Shop->lihat_detail($id_transaksi);
			$this->load->view("v_detail_pesanan", $data);
			 }
	}

	public function transaksi_admin_page(){
		if($this->session->userdata('logged_in')==TRUE){
			$data['all_transaksi']=$this->M_Shop->get_all_transaksi();
			$this->load->view("v_transaksi_admin", $data);
		}
	}
	public function pesanan_penjual(){
		if($this->session->userdata('logged_in')==TRUE){
			$data['pesanan']=$this->M_Shop->pesanan_penjual();
			$this->load->view("v_pesanan_penjual", $data);
		}
	}

	public function get_detail_transaksi($id_transaksi=''){
		$data_detail=$this->M_Shop->detail_transaksi($id_transaksi);
		echo json_encode($data_detail);
	}

	public function upload_bukti(){
		$config['upload_path'] = './uploads/bukti_transfer';
		$config['allowed_types'] = 'jpg|png';
	
		$this->upload->initialize($config);

			if ($_FILES['foto_bukti']['name'] != "") {
				$this->load->library('upload', $config);
	
				if (!$this->upload->do_upload('foto_bukti')) {
					$this->session->set_flashdata('pesan', $this->upload->display_errors());
					redirect('Shop/pesanan');
				} else {
					if($this->M_Shop->upload_bukti($this->upload->data('file_name'))){
						$this->session->set_flashdata('pesan', 'Bukti pembayaran telah diunggah. Pembayaran akan segera kami konfirmasi');
					} else {
						$this->session->set_flashdata('pesan', 'Bukti pembayaran gagal diunggah');
					}
					redirect('Shop/pesanan');
				}
					
			} else {
				if ($this->M_Shop->upload_bukti('')) {
					$this->session->set_flashdata('pesan', 'Bukti pembayaran telah diunggah. Pembayaran akan segera kami konfirmasi');
				} else {
					$this->session->set_flashdata('pesan', 'Bukti pembayaran gagal diunggah');
				}
				redirect('Shop/pesanan');
			}	
	}
	
	public function status_diproses($id_transaksi){
		$ambil=$this->M_Shop->status_diproses($id_transaksi);
		redirect(base_url('Shop/transaksi_admin_page'));
	}

	public function status_dikirim(){
		$ambil=$this->M_Shop->status_dikirim();
		redirect(base_url('Shop/pesanan_penjual'));
	}

	public function status_selesai($id_transaksi){
		$ambil=$this->M_Shop->status_selesai($id_transaksi);
		redirect(base_url('Shop/pesanan'));
	}

	
}
	

/* End of file Shop.php */
/* Location: ./application/controllers/Shop.php */
