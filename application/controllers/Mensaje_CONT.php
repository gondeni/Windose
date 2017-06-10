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
        $remitente = $this->session->userdata;
        if ($this->session->userdata('permisos') == 0)
            $destinatario = $this->Empleado_MODEL->buscarEmpleado($destinatario);
        else
            $destinatario = $this->Cliente_MODEL->buscarCliente($destinatario);

        $datos = array(
            'remitente' => $remitente,
            'destinatario' => $destinatario
        );
        $this->load->view("util/head");
        $this->load->view("util/cabecera_VIEW", $this->session->userdata);
        $this->load->view("mensaje_VIEW", $datos);
        $this->load->view("util/foot");
    }

    /**
     * Este metodo envía un mensaje
     * Funciona tanto como para nuevo mensaje como para responder.
     */
    public function enviar()
    {
        $nombre_destinatario = $this->input->post('nombre_destinatario');
        $id_remitente = $this->input->post('id_remitente');
        $asunto = $this->input->post('asunto');
        $id_destinatario = $this->input->post('id_destinatario');
        $mensaje = $this->input->post('mensaje');

        //Comprobamos que tanto el destinatario como el remitente existen en BBDD
        //Usuario Cliente
        if ($this->session->userdata('permisos') == 0) {
            if ($id_destinatario == '')
                $destinatario = $this->Empleado_MODEL->buscarEmpleado(null, $nombre_destinatario);
            else
                $destinatario = $this->Empleado_MODEL->buscarEmpleado($id_destinatario, null);

            $remitente = $this->Cliente_MODEL->buscarCliente($id_remitente, null);
        }
        //Usuario Empleado
        else {
            if ($id_destinatario == '')
                $destinatario = $this->Cliente_MODEL->buscarCliente(null, $nombre_destinatario);
            else
                $destinatario = $this->Cliente_MODEL->buscarCliente($id_destinatario, null);

            $remitente = $this->Empleado_MODEL->buscarEmpleado($id_remitente, null);
        }
//        var_dump($destinatario[0]);
        //Si no, devolvemos un error.
        if (!$remitente || !$destinatario) {
            $this->session->set_flashdata('error', 'Error, no existe destinatario');
            redirect(base_url() . 'index.php/Mensaje_CONT');
        }
        //Y si no, se envía
        if ($this->Mensaje_MODEL->enviarMensaje($remitente[0], $destinatario[0],$asunto, $mensaje))
            redirect('Empleado_CONT');
        else{
            $this->session->set_flashdata('error', 'No se ha podido envíar el mensaje');
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
