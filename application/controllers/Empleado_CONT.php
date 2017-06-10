<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Empleado_CONT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Empleado_MODEL');
        $this->load->model('Cita_MODEL');
        $this->load->model('Mensaje_MODEL');
        $this->load->model('Cliente_MODEL');

    }

    public function index()
    {
        $datos = array(
            'mensajes' => $this->Mensaje_MODEL->buscarMensajes($this->session->userdata('ID')),
            'citas' => $this->Cita_MODEL->buscarCitas(),
            'clientes' => $this->Cliente_MODEL->listarClientes(),
            'empleados' => $this->Empleado_MODEL->listarEmpleados()
        );
        $this->load->view('util/head');
        $this->load->view('util/cabecera_VIEW', $this->session->userdata);
        $this->load->view('general_VIEW', $datos);
        $this->load->view('util/foot');
    }
}
