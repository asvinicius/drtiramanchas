<?php 
defined('BASEPATH') OR exit('No direct');

    class Welcome extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('template/public/menu_left');
            $this->load->view('public/welcome');
        }
    }
?>