<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Admin
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Categorie_model', 'categorie', true);
  }

  public function index()
  {
    $this->load->view('list-categorie');
  }

  public function form() {
    $action = $this->input->get('action');
    if($action == 'add') {
      $this->load->view('categorie-form', [
        'titre' => 'Ajouter Categorie',
        'values' => []
      ]);
    } else if($action == 'update') {
      $idCategory = $this->input->get('id');

      $categorie = $this->categorie->getById($idCategory);

      $this->load->view('categorie-form', [
        'titre' => 'Ajouter Categorie',
        'values' => $categorie
      ]);
    }
  }

  public function add() {
    $nom = $this->input->post('name');
    $this->categorie->insert($nom);

    redirect('admin');
  }

  public function update() {
    $id = $this->input->post('id');
    $nom = $this->input->post('name');

    $this->categorie->update($id, $nom);

    redirect('admin');
  }

  public function delete() {
    $id = $this->input->get('id');
    $this->categorie->delete($id);
    redirect('admin');
  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */