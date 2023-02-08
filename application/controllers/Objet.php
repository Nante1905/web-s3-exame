<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Objet
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

class Objet extends CI_Controller
{

  public $idUser;
  public $props;
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Object_model','objet',true);
    $this->load->model('Mesobjets_model','mesObjets',true);
    $this->load->model('Categorie_model','categorie',true);
    $this->load->model('ObjetPhoto_model', 'objetPhoto', true);
    $this->props = [
      'component' => 'list-objet',
      'style' => ['list-objet'],
      'title' => 'Liste objets'
    ];
    $this->idUser = $this->session->usrsession;
  }

  public function index()
  {
    $data= [
      'objets' => $this->objet->getAllExceptUsr(),
      'categorie' => $this->categorie->findAll()
    ];

    $dataAll = array_merge($data, $this->props);

    $this->load->view('templates/body',$dataAll);
  }

  public function detail($id)
  {
    $objet = $this->objet->getObjectById($id)[0];
    $objet_data= [
      'objetDetail' => $objet,
      'mesObjets' => $this->mesObjets->findAllById($this->idUser),
      'photos' => $this->objetPhoto->findByIdObjet($objet->id),
      'categorie' => $this->categorie->findAll()
    ];
    //ty tsy haiko raha mety an izao fa nataoko an io aloha 
    //sody afaka ampiana getter setters? le props? 
    $this->props = [
      'component' => 'detail-objet',
      'style' => ['detail-objet'],
      'title' => 'Details objet',
      'idobjetangatahana' => $id
    ];
    $data_detail = array_merge($objet_data, $this->props);

    $this->load->view('templates/body',$data_detail);
  }

  public function searchobject()
  {
    $search=$this->input->post('search');
    $categorie_name=$this->input->post('categorie');
    
    $data_searched = [
      'objet' => $this->objet->getObjectSearched($search,$categorie_name)
    ];
    $this->props = [
      'component' => 'recherche-objet',
      'style' => ['list-objet'],
      'title' => 'Recherche objet'
    ];
    $data_found = array_merge($data_searched, $this->props);

    $this->load->view('templates/body',$data_found);
  }

}


/* End of file Objet.php */
/* Location: ./application/controllers/Objet.php */