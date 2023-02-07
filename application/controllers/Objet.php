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

  public $propriete;
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Object_model','objet',true);
    $this->propriete = [
      'component' => 'list-objet',
      'style' => 'list-objet',
      'title' => 'Liste objets'
    ];
  }

  public function index()
  {
    $datapro=$this->propriete;
    $this->load->view('list-objet',$datapro);
  }

  public function passAllObject(){
    $data=$this->objet->getAllExceptUsr();
    $this->load->view('list-objet',$data);
  }

}


/* End of file Objet.php */
/* Location: ./application/controllers/Objet.php */