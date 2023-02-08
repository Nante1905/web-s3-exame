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
    $this->load->model('Historiqueobjet_model','historique',true);
  }

  public function index()
  {
    $this->load->view('templates/body');
  }

  public function proposer(){
    $idobjetask = $this->input->post('idobjetask');
    $idutilisateurask = $this->input->post('idutilisateurask');
    $idobjetgive = $this->input->post('idobjetgive');
    $idutilisateurgive = $this->input->post('idutilisateurgive');

    $status = 1;
    $this->proposition->insert($idobjetask,$idutilisateurask,$idobjetgive,$idutilisateurgive,$status);
    redirect('proposition/index');
  }

  public function refuser(){
    $idobjetask = $this->input->post('idobjetask');
    $idutilisateurask = $this->input->post('idutilisateurask');
    $idobjetgive = $this->input->post('idobjetgive');
    $idutilisateurgive = $this->input->post('idutilisateurgive');

    $status = 0;
    $this->proposition->updateStatus($idobjetask,$idutilisateurask,$status);
    redirect('proposition/index');
  }

  public function accepter(){
    $idobjetask = $this->input->post('idobjetask');
    $idutilisateurask = $this->input->post('idutilisateurask');
    $idobjetgive = $this->input->post('idobjetgive');
    $idutilisateurgive = $this->input->post('idutilisateurgive');

    $status = 2;
    $this->proposition->updateStatus($idobjetask,$idutilisateurask,$status);
    $this->historique->insert($idutilisateurgive,$idobjetask,$idutilisateurask);
    $this->objet->update($idobjetask,$idutilisateurgive);
    $this->objet->update($idobjetgive,$idutilisateurask);
    redirect('proposition/index');

  }

}


/* End of file Proposition.php */
/* Location: ./application/controllers/Proposition.php */