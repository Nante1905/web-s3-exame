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

    $categories = $this->categorie->findAll();

    $this->load->view('templates/body', [
      'style' => array(
        'list-categ'
      ),
      'component' => 'list-categ',
      'title' => 'Liste des categories',
      'categories' => $categories
    ]);
  }

  public function form() {
    $action = $this->input->get('action');
    if($action == 'add') {
      $this->load->view('templates/body', [
        'titre' => 'Ajouter Categorie',
        'values' => [''],
        'component' => 'form-categ',
        'style' => [
          'form-categ'
        ]
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
    $nom = $this->input->post('nameCateg');

    $this->form_validation->set_rules('nameCateg','Nom de categorie','required',[
      'required' => 'Champ %s obligatoire'
    ]);

    if($this->form_validation->run() == true) {
      $this->categorie->insert($nom);
      redirect('admin');
    }
    else {
      $this->load->view('templates/body', [
        'titre' => 'Ajouter Categorie',
        'values' => [''],
        'component' => 'form-categ',
        'style' => [
          'form-categ'
        ]
      ]);
    }


  }

  public function update($id) {
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