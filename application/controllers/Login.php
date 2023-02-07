<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login
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

class Login extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Utilisateur_model','user',true); 
  }
  public function admin(){
    $this->load->view('admin');
  }
  public function user(){
    $this->load->view('client');
  }

  public function index()
  {
    $this->load->view('login');
  }
  public function auth(){
    $email = $this->input->post('email');
    $mdp = $this->input->post('mdp');

    if($email=='admin'){
      if($mdp=='admin'){
        redirect('login/admin');
      }
    }
    else{
      $auth = $this->user->getClientByEmailPass($email,$mpd);
  
      if($auth == true){
        redirect('home');
      }
      else{
        redirect('login/user');
      }
    }
  }

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */