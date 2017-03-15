<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Web extends CI_Controller{

  public function _construct()
  {
     parent::_construct();
     //codeigniter : Write Less Do More
      }

      function index()
      {
        $this->load->view('inicio');
      }
}
