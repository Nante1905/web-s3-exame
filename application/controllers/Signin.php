<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Signin
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

class Signin extends CI_Controller
{

  public $errorMessages;
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Utilisateur_model','user',true); 
    $this->errorMessages = [
      'required' => 'Le champ %s est obligatoire'
    ];
  }

  public function index()
  {
    $this->load->view('inscription');
  }

  public function signin(){
    $nom = $this->input->post('nom');
    $email = $this->input->post('mail');
    $password = $this->input->post('pass');

    $this->form_validation->set_rules('nom','Nom','required',$this->errorMessages);
    $this->form_validation->set_rules('mail','Email','required',$this->errorMessages);
    $this->form_validation->set_rules('pass','Mot de passe','required',$this->errorMessages);

    if($this->form_validation->run() == false){
      $this->load->view('inscripion');
    }
    else{
      $this->user->insert($nom,$email,$password);
      redirect('login/index');
    }

  }

}


/* End of file Signin.php */
/* Location: ./application/controllers/Signin.php */