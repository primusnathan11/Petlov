<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Chat
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Chat extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('M_Chat');
  }

  public function index()
  {
		$data['data_dokter']=$this->M_Chat->get_dokter();
    $this->load->view('v_chat',$data);
  }

}


/* End of file Chat.php */
/* Location: ./application/controllers/Chat.php */
