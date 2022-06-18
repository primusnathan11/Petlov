<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('M_Artikel');
  }

	public function index(){
		$data['data_artikel']= $this->M_Artikel->get_artikel();
		$this->load->view('v_index',$data);
	}

	public function home_dokter(){
    $this->load->view('v_home_dokter');
	}
	public function home_admin(){
		$this->load->view('v_home_admin');
	}

  public function home_petshop()
  {
    $this->load->view('v_home_petshop'); 
  }

  public function artikel()
  {	
    $this->load->view('v_artikel'); 
  }

	public function artikel2()
  {
    $this->load->view('v_artikel2');
  }
	
  public function artikel3()
  {
    $this->load->view('v_artikel3');
  }

	public function artikel4()
  {
    $this->load->view('v_artikel4');
  }

  public function artikel5()
  {
    $this->load->view('v_artikel5');
  }

  public function artikel6()
  {
    $this->load->view('v_artikel6');
  }

	public function verifikasi_dokter()
  {
		$this->load->model('M_Login');
		$data['data_dokter']= $this->M_Login->get_dokter();
    $this->load->view('v_verifikasi_dokter',$data); 
  }

	public function administrasi()
  {
		$this->load->model('M_Login');
		$data['data_admin']= $this->M_Login->get_admin();
    $this->load->view('v_admin',$data); 
  }

	public function approve_dokter($id_dokter)
  {
		$this->load->model('M_Login');
		$ambil=$this->M_Login->approve_dokter($id_dokter);
		redirect(base_url('Home/verifikasi_dokter'));
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
