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
    $this->load->model('Historiqueobjet_model','historique',true);
    $this->load->model('Proposition_model','proposition',true);
    $this->load->model('Utilisateur_model','user',true);
    $this->load->model('Object_model','objet',true);
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


    $propositions = $this->proposition->findAllByIdUserAngatahana($this->idUser);
    $userMangataka = [];
    $objetMangataka = [];
    $objetAngatahana = [];
    foreach($propositions as $proposition) {
      $userMangataka[] = $this->user->findById($proposition->idutilisateurmangataka)[0];
      $objetAngatahana[] = $this->objet->getObjectById($proposition->idobjetangatahana)[0];
      $objetMangataka[] = $this->objet->getObjectById($proposition->idobjetmangataka)[0];
    }


    $this->load->view('templates/body', [
      'htmlTitle' => 'List des propositions',
      'style' => ['list-proposition'],
      'component' => 'list-proposition',
      'userMangataka' => $userMangataka,
      'objetMangataka' => $objetMangataka,
      'objetAngatahana' => $objetAngatahana,
      'propositions' => $propositions
    ]);
  }

  public function proposer(){
    $idObjetMangataka = $this->input->post('idobjetmangataka');
    $idObjetAngatahana = $this->input->post('idobjetangatahana');
    $idUtilisateurAngatahana = $this->input->post('idutilisateurangatahana');

    $status = 1;
    $this->proposition->insert($idObjetAngatahana, $idUtilisateurAngatahana, $idObjetMangataka, $this->idUser, $status);
    redirect('objet/index');
  }

  public function refuser(){
    $propositionId = $this->input->get('id');
    $this->proposition->updateStatus($propositionId,0);
    
    redirect('objet');
  }

  public function accepter(){
    $propositionId = $this->input->get('id');
    $proposition = $this->proposition->findById($propositionId);

    $this->historique->insert($proposition->idutilisateurangatahana, $proposition->idobjetangatahana);
    $this->historique->insert($proposition->idutilisateurmangataka, $proposition->idobjetmangataka);

    $this->objet->changeOwner($proposition->idobjetangatahana, $proposition->idutilisateurmangataka);
    $this->objet->changeOwner($proposition->idobjetmangataka, $proposition->idutilisateurangatahana);

    $this->proposition->updateStatus($propositionId,2);

    redirect('objet');
  }

}


/* End of file Proposition.php */
/* Location: ./application/controllers/Proposition.php */