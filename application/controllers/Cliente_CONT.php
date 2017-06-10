<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_CONT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_MODEL');
        $this->load->model('Cita_MODEL');
        $this->load->model('Mensaje_MODEL');
        $this->load->model('Empleado_MODEL');

    }

    public function index()
    {
        $sesion = array(
            'nombre' => $this->session->userdata('nombre')
        );
        $datos = array(
            'mensajes' => $this->Mensaje_MODEL->buscarMensajes($this->session->userdata('ID')),
            'citas' => $this->Cita_MODEL->buscarCitas(),
            'clientes' => $this->Cliente_MODEL->listarClientes(),
            'empleados' => $this->Empleado_MODEL->listarEmpleados()
        );
        $this->load->view('util/head');
        $this->load->view('util/cabecera_VIEW', $sesion);
        $this->load->view('general_VIEW', $datos);
        $this->load->view('util/foot');

    }
}
