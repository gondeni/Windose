<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_CONT extends CI_Controller
{
    public function index(){
        $this->load->view('index.php');
    }
}