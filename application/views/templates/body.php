<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/htmlBegin');
$this->load->view($component);

$this->load->view('templates/htmlEnd');