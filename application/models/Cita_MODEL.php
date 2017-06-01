<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cita_MODEL extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function buscarCitas(){

        $this->db->select('*');
        $this->db->from('citas');
        $consulta=$this->db->get();
        $resultado=$consulta->result();
        return $resultado;
    }
}