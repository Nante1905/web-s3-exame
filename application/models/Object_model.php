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

  public function changeOwner($id, $newOwner) {
    $this->db->where([
      'id' => $id
    ]);
    $this->db->update('objet', [
      'idutilisateur' => $newOwner
    ]);
  }

  public function getAllExceptUsr(){
    $this->db->select(['objet.*', 'objetphoto.url']);
    $this->db->join('objetphoto', 'objet.id = objetphoto.idobjet');
    $this->db->where('idutilisateur !=',$this->session->userdata('usrsession'));
    $this->db->group_by("objet.id");

    $query = $this->db->get('objet');

    $data=$query->result();
    return $data;
  }

  public function getAllExceptUsrByCategAndTitre($categorie, $titre){
    $this->db->select(['objet.*', 'objetphoto.url']);
    $this->db->join('objetphoto', 'objet.id = objetphoto.idobjet');
    $this->db->like('titre', $titre);
    $this->db->where([
      'idutilisateur !=' => $this->session->userdata('usrsession'),
      'idcategorie' => $categorie,
    ]);
    $this->db->group_by("objet.id");

    $query = $this->db->get('objet');

    $data=$query->result();
    return $data;
  }

  public function getObjectById($id) {
    $this->db->select('*');
    $this->db->where(['id'=>$id]);
    $query=$this->db->get('objet');
    $data=$query->result();
    return $data;
  }

  public function getObjectSearched($search,$idcategorie){
    $sql = "SELECT * FROM objet WHERE idcategorie=".$idcategorie." LIKE '%" .$this->db->escape_like_str($search)."%' ESCAPE '!'";
    $query = $this->db->query($sql);
    $data_searched=$query-> result_array();
    return $data_searched;
  }
  public function update($idObjet,$idutilisateur){
    $data = [
      'idutilisateur' => $idutilisateur
    ];

    $this->db->where([
      'id' => $idObjet
    ]);

    $this->db->update('objet', $data);
  }


  // ------------------------------------------------------------------------

}

/* End of file Object_model.php */
/* Location: ./application/models/Object_model.php */