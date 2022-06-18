<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Chat extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_dokter(){
		$this->db->select('nama_dokter, email_dokter, alamat_dokter, REPLACE(telp_dokter, "08", "628") as telp_dokter');
		$this->db->from('dokter');
		$this->db->where('sertif_approval','Approved');
		$query = $this->db->get()->result();
		return $query;
	}
  // ------------------------------------------------------------------------

}

/* End of file Chat_model.php */
/* Location: ./application/models/Chat_model.php */
