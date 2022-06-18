<?php
class M_Login extends CI_Model{
    //cek nip dan password dosen
    function auth_user($email,$password){
        $query=$this->db->query("SELECT * FROM user WHERE email_user='$email' AND pass_user='$password' LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_dokter($email,$password){
        $query=$this->db->query("SELECT * FROM dokter WHERE email_dokter='$email' AND pass_dokter = '$password' LIMIT 1");
        return $query;
    }

	function auth_petshop($email,$password){
        $query=$this->db->query("SELECT * FROM petshop WHERE email_petshop='$email' AND pass_petshop = '$password' LIMIT 1");
        return $query;
    }

	function auth_admin($email,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE email_admin='$email' AND pass_admin = '$password' LIMIT 1");
        return $query;
    }

	public function login_user($email, $password){

        $query = $this->db->where('email_user',$email)
						   ->where('pass_user',$password)
                           ->get('user');

        if($this->db->affected_rows() > 0){

            $data_login = $query->row();

            $data_session = array(
                                'email_user'=> $data_login->email_user,
                                'pass_user'=> $data_login->pass_user,
                                'logged_in'=> TRUE,
								'nama_user'=> $data_login->nama_user,
								'id_user' => $data_login->id_user,
								'telp_user' => $data_login->telp_user,
								'alamat_user'=> $data_login->alamat_user
            );
            $this->session->set_userdata($data_session);

            return TRUE;
        }else{
            return FALSE;
        }
    }
	public function login_dokter($email, $password){

        $query = $this->db->where('email_dokter',$email)
						   ->where('pass_dokter',$password)
                           ->get('dokter');

        if($this->db->affected_rows() > 0){

            $data_login = $query->row();

            $data_session = array(
                                'email_dokter'=> $data_login->email_user,
                                'pass_dokter'=> $data_login->pass_user,
                                'logged_in'=> TRUE,
								'nama_dokter'=> $data_login->nama_dokter,
								'id_dokter' => $data_login->id_dokter,
								'telp_dokter' => $data_login->telp_dokter
            );
            $this->session->set_userdata($data_session);

            return TRUE;
        }else{
            return FALSE;
        }
    }
	public function login_petshop($email, $password){

        $query = $this->db->where('email_petshop',$email)
						   ->where('pass_petshop',$password)
                           ->get('petshop');

        if($this->db->affected_rows() > 0){

            $data_login = $query->row();

            $data_session = array(
                                'email_petshop'=> $data_login->email_user,
                                'pass_petshop'=> $data_login->pass_user,
                                'logged_in'=> TRUE,
								'nama_petshop'=> $data_login->nama_petshop,
								'id_petshop' => $data_login->id_petshop
            );
            $this->session->set_userdata($data_session);

            return TRUE;
        }else{
            return FALSE;
        }
    }

	public function login_admin($email, $password){

        $query = $this->db->where('email_admin',$email)
						   ->where('pass_admin',$password)
                           ->get('admin');

        if($this->db->affected_rows() > 0){

            $data_login = $query->row();

            $data_session = array(
                                'email_admin'=> $data_login->email_user,
                                'pass_admin'=> $data_login->pass_user,
                                'logged_in'=> TRUE,
								'nama_admin'=> $data_login->nama_admin,
								'id_admin' => $data_login->id_admin
            );
            $this->session->set_userdata($data_session);

            return TRUE;
        }else{
            return FALSE;
        }
    }

	public function daftar_user(){
		
        $data_user=array(
            'nama_user'=>$this->input->post('nama_user'),
			'telp_user'=>$this->input->post('telp_user'),
            'email_user'=>$this->input->post('email_user'),
            'pass_user'=>$this->input->post('pass_user'),
			'alamat_user'=>$this->input->post('alamat_user')
			
        );
        $masuk=$this->db->insert('user', $data_user);

        return $masuk;
    }

	public function daftar_petshop(){
		
        $data_petshop = array(
            'nama_petshop'=>$this->input->post('nama_petshop'),
			'telp_petshop'=>$this->input->post('telp_petshop'),
            'email_petshop'=>$this->input->post('email_petshop'),
            'pass_petshop'=>$this->input->post('pass_petshop'),
			'alamat_petshop'=>$this->input->post('alamat_petshop')
			
        );
        $masuk=$this->db->insert('petshop', $data_petshop);

        return $masuk;
    }

	public function daftar_admin(){
		
        $data_petshop = array(
            'nama_admin'=>$this->input->post('nama_admin'),
			'telp_admin'=>$this->input->post('telp_admin'),
            'email_admin'=>$this->input->post('email_admin'),
            'pass_admin'=>$this->input->post('pass_admin'),
			'alamat_admin'=>$this->input->post('alamat_admin')
			
        );
        $masuk=$this->db->insert('admin', $data_petshop);

        return $masuk;
    }

	public function get_detail_admin($id_admin=''){
		return $this->db->where('id_admin', $id_admin)->get('admin')->row();
	}

	public function edit_admin(){
		$dt_up_admin=array(
			'nama_admin'=>$this->input->post('nama_admin'),
			'telp_admin'=>$this->input->post('telp_admin'),
            'email_admin'=>$this->input->post('email_admin'),
            'pass_admin'=>$this->input->post('pass_admin'),
			'alamat_admin'=>$this->input->post('alamat_admin')
			
		);
		return $this->db->where('id_admin', $this->input->post('id_admin'))->update('admin', $dt_up_admin);
		}

	public function hapus_admin($id_admin){
		$this->db->where('id_admin', $id_admin);
		return $this->db->delete('admin');
	}

	public function daftar_dokter($nama_file){
        if ($nama_file == "") {
            $tambah = array(
                'nama_dokter' =>$this->input->post('nama_dokter'),
                'telp_dokter' =>$this->input->post('telp_dokter'),
                'email_dokter' =>$this->input->post('email_dokter'),
                'pass_dokter' =>$this->input->post('pass_dokter'),
				'alamat_dokter' =>$this->input->post('alamat_dokter'),
				'sertif_approval' => 'Pending'
				
            );
        } else {
            $tambah = array(
                'nama_dokter' =>$this->input->post('nama_dokter'),
                'telp_dokter' =>$this->input->post('telp_dokter'),
                'email_dokter' =>$this->input->post('email_dokter'),
                'pass_dokter' =>$this->input->post('pass_dokter'),
				'alamat_dokter' =>$this->input->post('alamat_dokter'),
				'sertifikat_dokter'=>$nama_file,
				'sertif_approval' => 'Pending'
                
                
            );
        }
        return $this->db->insert('dokter', $tambah);
    }

	public function get_dokter(){
		$this->db->select('*');
		$this->db->from('dokter');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_admin(){
		$this->db->select('*');
		$this->db->from('admin');
		$query = $this->db->get()->result();
		return $query;
	}

	public function approve_dokter($id_dokter){
		$data_update=array(
				'sertif_approval'=>'Approved'
		);
		$this->db->where('id_dokter',$id_dokter);
		$this->db->update('dokter',$data_update );
	}
 
}
