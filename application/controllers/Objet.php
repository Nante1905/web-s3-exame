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

  public $id;
  public $descri;
  public $prix ;
  public $idUser;
  public $props;
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Object_model','objet',true);
    $this->props = [
      'component' => 'list-objet',
      'style' => ['list-objet'],
      'title' => 'Liste objets'
    ];
  }

  public function index()
  {
    $data= [
      'objets' => $this->objet->getAllExceptUsr()
    ];

    $dataAll = array_merge($data, $this->props);

    $this->load->view('templates/body',$dataAll);
  }

  public function detail($id)
  {
    $objet_data= [
      'objets' => $this->objet->getObjectById($id)
    ];
    //ty tsy haiko raha mety an izao fa nataoko an io aloha 
    //sody afaka ampiana getter setters? le props? 
    $this->props = [
      'component' => 'detail-objet',
      'style' => ['detail-objet'],
      'title' => 'Details objet'
    ];
    $data_detail = array_merge($objet_data, $this->props);

    $this->load->view('templates/body',$data_detail);
  }
}


/* End of file Objet.php */
/* Location: ./application/controllers/Objet.php */