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
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Utilisateur_model','user',true); 
  }

  public function index()
  {
    $this->load->view('inscription');
  }

  public function signin(){
    $nom = $this->input->post('nom');
    $email = $this->input->post('mail');
    $password = $this->input->post('pass');

    $this->form_validation->set_rules('nom','Nom','required',[
      'required' => 'Le champ %s est obligatoire',
    ]);
    $this->form_validation->set_rules('mail','Email','required',[
      'required' => 'Le champ %s est obligatoire',
    ]);
    $this->form_validation->set_rules('pass','Mot de passe','required',[
      'required' => 'Le champ %s est obligatoire',
    ]);

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