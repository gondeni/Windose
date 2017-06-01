<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mensaje_MODEL extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * Metodo que lista los mensajes, pero no debe listar aquellos cuyo remitente sea la persona conectada a la sesion
     */
    public function buscarMensajes($ID){

        $this->db->select('*');
        $this->db->from('mensajes');
//        $this->db->where('id_remitente!=',$ID);
        $consulta=$this->db->get();
        $resultado=$consulta->result();
        return $resultado;
    }

    //Queda por implementar correctamente las fechas
    public function enviarMensaje($remitente,$destinatario,$mensaje){
        $mensaje= array(
            'ID'=>null,
            'fecha'=>'hoy',
            'id_remitente'=>$remitente,
            'id_destinatario'=>$destinatario,
            'mensaje'=>$mensaje,
        );
        $this->db->insert('mensajes',$mensaje);
    }
}