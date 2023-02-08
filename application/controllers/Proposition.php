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
  public $idUser;
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Proposition_model','proposition',true);
    $this->load->model('Historiqueobjet_model','historique',true);
    $this->idUser = $this->session->usrsession;
  }

  public function index()
  {
    $data = [
      'style' => ['list-proposition'],
      'component' => 'list-proposition'
    ];
    $this->load->view('templates/body',$data);
  }

  public function list() {
    $this->load->view('templates/body', [
      'htmlTitle' => 'List des propositions',
      'style' => ['list-proposition'],
      'component' => 'list-proposition'
    ]);
  }

  public function proposer(){
    $idobjetask = $this->input->post('idobjetmagataka');
    // $idobjetask = $this->idUser;
    // $idutilisateurask = $this->input->post('idutilisateurask');
    $idutilisateurask = $this->idUser;
    $idobjetgive = $this->input->post('idobjetmagataka');
    $idutilisateurgive = $this->input->post('idutilisateurangatahana');

    $status = 1;
    $this->proposition->insert($idobjetask,$idutilisateurask,$idobjetgive,$idutilisateurgive,$status);
    redirect('objet/index');
  }

  public function refuser(){
    $idobjetask = $this->input->post('idobjetask');
    $idutilisateurask = $this->input->post('idutilisateurask');
    $idobjetgive = $this->input->post('idobjetgive');
    $idutilisateurgive = $this->input->post('idutilisateurgive');

    $status = 0;
    $this->proposition->updateStatus($idobjetask,$idutilisateurask,$status);
    redirect('objet/index');
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
    redirect('objet/index');

  }

}


/* End of file Proposition.php */
/* Location: ./application/controllers/Proposition.php */