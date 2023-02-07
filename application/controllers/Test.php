<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Test
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI_CONTROLLER
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Test extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
  }

  public function index()
  {

    $this->load->view('Ajout');
  }
  public function categorie(){
    $props = [
      'component' => 'list-categ',
      'style' => ['list-categ'],
      'title' => 'Categories'
    ];
    $this->load->view('templates/body',$props);
  }
  public function form(){
    $props = [
      'component' => 'form-categ',
      'style' => ['form-categ'],
      'title' => 'Modification categorie'
    ];
    $this->load->view('templates/body',$props);
  }

}


/* End of file Test.php */
/* Location: ./application/controllers/Test.php */