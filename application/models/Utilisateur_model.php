<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Utilisateur_model
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

class Utilisateur_model extends CI_Model {

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
  public function getClientByEmailPass($email,$password){
    $this->db->where([
      'email' => $email,
      'password' => $password
    ]);
    $query = $this->db->get('utilisateur');

    $data = $query->result();

    if(count($data) >= 1){
      $this->session->set_userdata('usrsession',$data[0]->email);
      return true;
    }

    return false;
  }
  public function insert($nom,$email,$mdp){
    $data = array(
      'id' => '',
      'nom' => $nom,
      'email' =>$email,
      'password'=>$mdp
    );
    $this->db->insert('utilisateur',$data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Utilisateur_model.php */
/* Location: ./application/models/Utilisateur_model.php */