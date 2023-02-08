<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Historiqueobjet_model
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

class Historiqueobjet_model extends CI_Model {

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

  public function insert($ancienutilisateur,$objet_id,$objet_idutilisateur){
    $data = array(
      'dateproposition' => 'now()',
      'ancienutilisateur' => $ancienutilisateur,
      'objet_id' => $objet_id,
      'objet_idutilisateur'=> $objet_idutilisateur
    );

    $this->db->insert('historiqueobjet',$data);
  }

  public function getCount() {
    $this->db->select(['count(*) as nbr']);
    $query = $this->db->get('historiqueobjet');

    return ($query->result()[0]->nbr)/2;
  }

  // ------------------------------------------------------------------------

}

/* End of file Historiqueobjet_model.php */
/* Location: ./application/models/Historiqueobjet_model.php */