<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mensaje_CONT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Empleado_MODEL');
        $this->load->model('Cliente_MODEL');
        $this->load->model('Cita_MODEL');
        $this->load->model('Mensaje_MODEL');

    }

    /*
     * Este método está hecho, de momento, sólo en la dirección de Empleado->Cliente (Ya que empleado está respondiendo).
     * Con más tiempo se implementará de forma que busque "remitente" en la tabla que corresponda,
     * ya que los mensajes pueden ir en los dos sentidos (Cliente<->Empleado) y no únicamente Empleado->Cliente.
     *
     * Se muestran los mensajes enviados por la persona que está en la sesión y no debería. Se corregirán más adelante.
     *
     * PD: Las fechas no están implantadas.
     * PDD: Los mensajes,de momento, sólo funcionan Empleado->Cliente no Empleado<->Cliente.
     *
    */
    public function index($remitente = null, $destinatario = null)
    {
        $sesion = array(
            'nombre' => $this->session->userdata('nombre')
        );
        $datos = array(
            'remitente' => $this->Empleado_MODEL->buscarEmpleado($destinatario),
            'destinatario' => $this->Cliente_MODEL->buscarCliente($remitente)
        );
        /*var_dump($datos);
        die();*/
        $this->load->view("util/head");
        $this->load->view("util/cabecera_VIEW", $sesion);
        $this->load->view("mensaje_VIEW", $datos);
        $this->load->view("util/foot");
    }

    public function enviar(){
        $remitente=$this->input->post('remitente');
        $destinatario=$this->input->post('destinatario');
        $mensaje=$this->input->post('mensaje');
        $this->Mensaje_MODEL->enviarMensaje($remitente,$destinatario,$mensaje);
        redirect('Empleado_CONT');
    }
}
