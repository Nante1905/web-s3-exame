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

  public function findAllById($id) {
    $this->db->where([
      'idutilisateur =' => $id
    ]);

    $query = $this->db->get('objet');

    return $query->result();
  }
  
  public function insert($titre,$description,$prix,$idutilisateur,$files){
    $data = array(
      'id' => '',
      'titre' => $titre,
      'description' =>$description,
      'prix' => $prix,
      'idutilisateur' => $idutilisateur
    );
    $this->db->insert('objet',$data);
    $idObjet = $this->db->insert_id();

    var_dump($idObjet);

    $this->uploadPics($idObjet, $files);

  }

  public function uploadPics($idObjet, $imgs) {
    $filesLength = count($imgs['name']);
    for ($i=0; $i < $filesLength; $i++) { 
      $filename = '';


      $_FILES['img']['name'] = $imgs['name'][$i];
      $_FILES['img']['type'] = $imgs['type'][$i];
      $_FILES['img']['tmp_name'] = $imgs['tmp_name'][$i];
      $_FILES['img']['error'] = $imgs['error'][$i];
      $_FILES['img']['size'] = $imgs['size'][$i];

      $config['upload_path'] = './assets/uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = '20000';

      $name = $_FILES['img']['name'];
      $config['file_name'] = 'user'.$this->session->userdata('usrsession').'_img'.$i;

      $this->load->library('upload', $config);


      if($this->upload->do_upload('img')){
        $uploadData = $this->upload->data();

        $this->objetPhoto->insert($idObjet, $filename);

        $data['totalFiles'][] = $filename;
      } else {
        $error = array('error' => $this->upload->display_errors());
      }
    }

    var_dump($data);
    var_dump($error);
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
      $this->db->delete('objet',array('id' => $idObjet));
      return true;
    }
    return false;

  }


  // ------------------------------------------------------------------------

}

/* End of file Mesobjets_model.php */
/* Location: ./application/models/Mesobjets_model.php */