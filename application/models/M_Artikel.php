<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Artikel_model
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

class M_Artikel extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

	public function get_artikel(){
		$this->db->select('*');
		$this->db->from('artikel');
		$query = $this->db->get()->result();
		return $query;
	}

	public function detail_artikel($id_artikel){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('id_artikel',$id_artikel);
		$query = $this->db->get()->result();
		return $query;
	}

  // ------------------------------------------------------------------------

}

/* End of file Artikel_model.php */
/* Location: ./application/models/Artikel_model.php */
