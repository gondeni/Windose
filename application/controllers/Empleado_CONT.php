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

    /*
     * De momento sólo está implementado el servicio de mensajería para el Empleado.
     * Lista únicamente los mensajes recibidos por este, no los envíados, por lo que
     * se excluyen del listado aquellos cuyo remitente != al ID de la sesión.
     *
     *
     * El método de las citas aún no se ha implementado.
     * */
    public function index()
    {
        $sesion = array(
            'nombre' => $this->session->userdata('nombre')
        );
        $datos = array(
            'mensajes' => $this->Mensaje_MODEL->buscarMensajes($this->session->userdata('ID')),
            'citas' => $this->Cita_MODEL->buscarCitas(),
            'remitentes' =>$this->Cliente_MODEL->listarClientes()
        );
        $this->load->view('util/head');
        $this->load->view('util/cabecera_VIEW', $sesion);
        $this->load->view('general_VIEW', $datos);
        $this->load->view('util/foot');
    }
}
