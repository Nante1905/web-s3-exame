<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Object_model
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

class Object_model extends CI_Model {

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

  /*
  tous les object sauf les siennes
  */
  public function getAllExceptUsr(){
    $this->db->select('*');
    $this->db->where('idutilisateur !=',$this->session->userdata('usrsession'));
    $query=$this->db->get('objet');
    $data=$query->result();
    return $data;
  }


  // ------------------------------------------------------------------------

}

/* End of file Object_model.php */
/* Location: ./application/models/Object_model.php */