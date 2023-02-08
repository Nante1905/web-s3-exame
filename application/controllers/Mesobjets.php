<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Mesobjets
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

class Mesobjets extends CI_Controller
{

  public $errorMessages;
  public $idUser;

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mesobjets_model','objet',true);
    $this->load->model('ObjetPhoto_model', 'objetPhoto', true);
    $this->errorMessages = [
      'required' => 'Le champ %s est obligatoire'
    ]; 
    $this->idUser = $this->session->userdata('usrsession');
  }

  public function index()
  {
    $props = [
      'component' => 'list-mes-objets',
      'title' => 'Liste de mes objets'
    ];
    // $this->load->view('templates/body',$props);
    $this->load->view('mes-objet', [
      'objets' => $this->objet->findAllById($this->idUser)
    ]);
  }

  public function addForm(){
    $props = [
      'component' => 'form-ajout-objet',
      'title' => 'Nouveau objet'
    ];
    // $this->load->view('templates/body',$props);
    $this->load->view('add-mes-objets');
  }
  
  public function updateForm(){
    $props = [
      'component' => 'form-update-objet',
      'title' => 'Modification objet'
    ];
    // $this->load->view('templates/body',$props);

    $titre = $this->input->get('titre');
    $prix = $this->input->get('prix');
    $descri = $this->input->get('description');
    $id = $this->input->get('id');

    $data = [
      'titre' => $titre,
      'prix' => $prix,
      'descri' => $descri,
      'id' => $id
    ];

    $this->load->view('update-mes-objets', $data);
  }

  public function add(){
    $titre = $this->input->post('titre');
    $description = $this->input->post('description');
    $prix = $this->input->post('prix');
    $idUser = $this->idUser;

    $this->form_validation->set_rules('titre','Titre','required',$this->errorMessages);
    $this->form_validation->set_rules('description','Description','required',$this->errorMessages);
    $this->form_validation->set_rules('prix','Prix','required',$this->errorMessages);

    if($this->form_validation->run() == false){
      $this->load->view('form-ajout-objet');
    }
    else{
      var_dump($_FILES['photos']);
      $this->objet->insert($titre,$description,$prix,$idUser,$_FILES['photos']);
      // redirect('mesobjets/addForm');
    }

  }

  public function update(){
    $idObjet = $this->input->post('id');
    $titre = $this->input->post('titre');
    $description = $this->input->post('description');
    $prix = $this->input->post('prix');
    $idUser = $this->idUser;

    $this->form_validation->set_rules('titre','Titre','required',$this->errorMessages);
    $this->form_validation->set_rules('description','Description','required',$this->errorMessages);
    $this->form_validation->set_rules('prix','Prix','required',$this->errorMessages);

    if($this->form_validation->run() == false){
      $this->load->view('form-update-objet');
    }
    else{
      $this->objet->update($idObjet,$titre,$description,$prix,$idUser);
      redirect('mesobjets/updateForm');
    }
  }

  public function delete(){
    $idObjet = $this->input->get('id');
    $idutilisateur = $this->idUser;

    $verif = $this->objet->delete($idObjet,$idutilisateur);
    if($verif == true){
      redirect('mesobjets/index');
    }
    else{
      redirect('');
    }
  }

}


/* End of file Mesobjets.php */
/* Location: ./application/controllers/Mesobjets.php */