<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Mesobjets_model
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

class Mesobjets_model extends CI_Model {

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
  
  public function insert($titre,$description,$prix,$idutilisateur){
    $data = array(
      'id' => '',
      'titre' => $titre,
      'description' =>$description,
      'prix' => $prix,
      'idutilisateur' => $idutilisateur
    );
    $this->db->insert('utilisateur',$data);
  }

  public function update($id,$titre,$description,$prix,$idutilisateur){
    $data = [
      'titre' => $titre,
      'description' => $description,
      'prix' => $prix,
      'idutilisateur' => $idutilisateur
    ];

    $this->db->where([
      'id' => $id
    ]);

    $this->db->update('objet', $data);
  }

  public function delete($idObjet,$idutilisateur){
    $this->db->where([
      'id' => $idObjet,
      'idutilisateur' => $idutilisateur
    ]);
    $query = $this->db->get('objet');

    $data = $query->result();

    if(count($data) == 1){
      $this->db->delete($data);
      return true;
    }
    return false;

  }


  // ------------------------------------------------------------------------

}

/* End of file Mesobjets_model.php */
/* Location: ./application/models/Mesobjets_model.php */