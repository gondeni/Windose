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
        if ($this->session->userdata('permisos') == 0) {
            $datos = array(
                'remitente' => $this->session->userdata,
                'destinatario' => $this->Empleado_MODEL->buscarEmpleado($destinatario)
            );
        } else {
            $datos = array(
                'remitente' => $this->session->userdata,
                'destinatario' => $this->Cliente_MODEL->buscarCliente($destinatario)
            );
        }

        $this->load->view("util/head");
        $this->load->view("util/cabecera_VIEW", $this->session->userdata);
        $this->load->view("mensaje_VIEW", $datos);
        $this->load->view("util/foot");
    }

    public function enviar()
    {
        $remitente = $this->input->post('remitente');
        $destinatario = $this->input->post('destinatario');
        $mensaje = $this->input->post('mensaje');
        if ($this->Mensaje_MODEL->enviarMensaje($remitente, $destinatario, $mensaje))
            redirect('Empleado_CONT');
        else {
            $this->session->set_flashdata('destinatario_incorrecto', 'No existe el destinatario');
            redirect(base_url() . 'index.php/Mensaje_CONT');
        }
    }
    /*
        public function obtener_remitente($id_remitente)
        {
            //Si el usuario de sesión es Usuario, busca en Empleados al remitente
            if ($this->session->userdata('permisos') == 0) {
                $empleado = $this->Empleado_MODEL->buscarEmpleado($id_remitente);
                return $empleado->nombre;
            }
            //Si no, busca en clientes
            else {
                $cliente = $this->Cliente_MODEL->buscarCliente($id_remitente);
                return $cliente->nombre;
            }
        }*/
}
