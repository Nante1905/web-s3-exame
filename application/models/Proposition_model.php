<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Proposition_model
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

class Proposition_model extends CI_Model {

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

  public function findAllByIdUserAngatahana($id) {
    $this->db->where([
      'idutilisateurangatahana' => $id,
      'status' => 1
    ]);
    $query = $this->db->get('proposition');

    return $query->result();
  }

  public function findById($id) {
    $this->db->where([
      'id' => $id
    ]);

    $query = $this->db->get('proposition');
    return $query->result()[0];
  }

  public function insert($idObjetAngatahana,$idUserAngatahana,$idObjetMangataka,$idUserMangataka,$status){
    $now = date('Y-m-d H:i:s');
    $data = array(
      'idobjetmangataka' => $idObjetMangataka,
      'idutilisateurmangataka' => $idUserMangataka,
      'idobjetangatahana' => $idObjetAngatahana,
      'idutilisateurangatahana'=> $idUserAngatahana,
      'dateproposition' => $now,
      'status'=>$status

    );
    $this->db->insert('proposition',$data);
  }

  public function updateStatus($id,$status){
    $data = [
      'status' => $status
    ];

    $this->db->where([
      'id' => $id
    ]);

    $this->db->update('proposition', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Proposition_model.php */
/* Location: ./application/models/Proposition_model.php */