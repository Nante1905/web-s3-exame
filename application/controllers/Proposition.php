<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Proposition
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

class Proposition extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Proposition_model','proposition',true);
    $this->load->model('Object_model','objet',true);
  }

  public function index()
  {
    $this->load->view('templates/body');
  }

  public function insert(){
    $idobjetask = $this->input->post('idobjetask');
    $idutilisateurask = $this->input->post('idutilisateurask');
    $idobjetgive = $this->input->post('idobjetgive');
    $idutilisateurgive = $this->input->post('idutilisateurgive');
    $status = 0;

    $action = $this->input->get('action');

    if($action == "proposer"){
      $status = 1;
      $this->proposition->insert($idobjetask,$idutilisateurask,$idobjetgive,$idutilisateurgive,$status);
      redirect('proposition/index');
    } elseif($action == "refuser"){
      $status = 1;
      $this->proposition->update($idobjetask,$idutilisateurask,$status);
      redirect('proposition/index');

    } else if($action == "accepter"){
      $status = 2;
      $this->proposition->update($idobjetask,$idutilisateurask,$status);
      $this->objet->update($idobjetask,$idutilisateurgive);
      $this->objet->update($idobjetgive,$idutilisateurask);
      redirect('proposition/index');

    }


  }

}


/* End of file Proposition.php */
/* Location: ./application/controllers/Proposition.php */