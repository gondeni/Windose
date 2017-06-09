<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mensaje_MODEL extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function buscarMensajes($ID)
    {

        $this->db->select('*');
        $this->db->from('mensajes');
//        $this->db->where('id_remitente!=',$ID);
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function enviarMensaje($remitente, $destinatario, $mensaje)
    {
        date_default_timezone_set('Europe/Madrid');
        $date = new DateTime();

        if ($this->session->userdata('permisos') == 0) {
            $mensaje = array(
                'ID' => null,
                'fecha' => $date->format('H:i:s d-m-Y '),
                'cod_remitente' => 'c' . $this->session->$remitente,
                'cod_destinatario' => 'e' . $destinatario,
                'mensaje' => $mensaje,
            );
        } else {
            $mensaje = array(
                'ID' => null,
                'fecha' => $date->format('H:i:s d-m-Y '),
                'cod_remitente' => 'e' . $this->session->$remitente,
                'cod_destinatario' => 'c' . $destinatario,
                'mensaje' => $mensaje,
            );
        }
        $this->db->insert('mensajes', $mensaje);
    }
}