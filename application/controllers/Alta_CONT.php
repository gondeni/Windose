<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alta_CONT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_MODEL');

    }

    public function index()
    {
        $this->load->view('util/head');
        $this->load->view('alta_VIEW');
        $this->load->view('util/foot');
    }

    public function alta()
    {
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $nombre = $this->input->post('nombre');
        $ciudad = $this->input->post('ciudad');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');
        $preferencia = $this->input->post('preferencia');
        $this->Cliente_MODEL->alta($ID = null, $usuario, $password, $nombre, $ciudad, $telefono, $email, $preferencia, $coach = null);
        redirect('Login_CONT');
    }
}
