<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Categorie_model
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

class Categorie_model extends CI_Model {

  public $id;
  public $nom;

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

  public function getById($id) {
    $this->db->where([
      'id' => $id
    ]);

    $query = $this->db->get('categorie');

    $data = $query->result();

    return $data[0];
  }
  
  public function insert($nom) {
    $data = [
      'id' => '',
      'nom' => $nom
    ];

    $this->db->insert('categorie', $data);
  }

  public function update($id ,$nom) {
    $data = [
      'nom' => $nom
    ];

    $this->db->where([
      'id' => $id
    ]);

    $this->db->update('categorie', $data);
  }

  public function delete($id) {
    $this->db->where([
      'id' => $id
    ]);
    $this->db->delete('categorie');
  }

  // ------------------------------------------------------------------------

}

/* End of file Categorie_model.php */
/* Location: ./application/models/Categorie_model.php */