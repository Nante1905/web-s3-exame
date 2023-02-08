<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model ObjetPhoto_model
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

class ObjetPhoto_model extends CI_Model {

  public $idobjet;
  public $url;

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

  public function insert($idobjet, $url) {
    $data = [
      'idobjet' => $idobjet,
      'url' => $url
    ];
    $this->db->insert('objetphoto', $data);
  }

  public function findByIdObjet($idObjet) {
    $this->db->where([
      'idobjet' => $idObjet
    ]);
    $query = $this->db->get('objetphoto');
    return $query->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file ObjetPhoto_model.php */
/* Location: ./application/models/ObjetPhoto_model.php */