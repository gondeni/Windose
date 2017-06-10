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

    public function enviarMensaje($remitente, $destinatario, $asunto, $mensaje)
    {
        date_default_timezone_set('Europe/Madrid');
        $date = new DateTime();
        if ($this->session->userdata('permisos') == 0) {
            $cod_remitente = 'c' . $remitente->ID;
            $cod_destinatario = 'e' . $destinatario->ID;
        } else {
            $cod_remitente = 'e' . $remitente->ID;
            $cod_destinatario = 'c' . $destinatario->ID;
        }

        $mensaje = array(
            'ID' => null,
            'fecha' => $date->format(' Y-m-d H:i:s '),
            'asunto' => $asunto,
            'cod_remitente' => $cod_remitente,
            'cod_destinatario' => $cod_destinatario,
            'mensaje' => $mensaje,
        );
       return $this->db->insert('mensajes', $mensaje);
    }
}