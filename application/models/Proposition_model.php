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

  public function insert($idobjetask,$idutilisateurask,$idobjetgive,$idutilisateurgive,$status){
    $data = array(
      'idobjetask' => $idobjetask,
      'idutilisateurask' => $idutilisateurask,
      'idobjetgive' => $idobjetgive,
      'idutilisateurgive'=> $idutilisateurgive,
      'dateproposition' => 'now()',
      'status'=>$status

    );
    $this->db->insert('proposition',$data);
  }

  public function updateStatus($idobjetask,$idutilisateurask,$status){
    $data = [
      'status' => $status
    ];

    $this->db->where([
      'idobjetask' => $idobjetask,
      'idutilisateurask' => $idutilisateurask
    ]);

    $this->db->update('proposition', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Proposition_model.php */
/* Location: ./application/models/Proposition_model.php */