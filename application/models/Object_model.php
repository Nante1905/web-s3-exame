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
    $this->db->from('objet');
    $this->db->join('objetphoto', 'objet.id = objetphoto.idobjet');
    $this->db->where('idutilisateur !=',$this->session->userdata('usrsession'));
    $this->db->group_by("objet.id");
    $data=$query->result();
    return $data;
  }

  public function getObjectById($id){
    $this->db->select('*');
    $this->db->where(['id'=>$id]);
    $query=$this->db->get('objet');
    $data=$query->result();
    return $data;
  }

  public function getObjectSearched($search,$idcategorie){
    $query = "SELECT * FROM objet join objetcategorie on objet.id=objetcategorie.idobjet WHERE objetcategorie.idcategorie=".$idcategorie." LIKE '%" .$this->db->escape_like_str($search)."%' ESCAPE '!'";
    $data_searched=$query-> result();
  }

  // ------------------------------------------------------------------------

}

/* End of file Object_model.php */
/* Location: ./application/models/Object_model.php */