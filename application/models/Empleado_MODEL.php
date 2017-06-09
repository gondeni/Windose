<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Empleado_MODEL extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function buscarEmpleado($ID)
    {

        if (isset($ID)) {
            $this->db->select('*');
            $this->db->from('empleados');
            $this->db->where('ID', $ID);
            $consulta = $this->db->get();
            $resultado = $consulta->result();
        } else
            $resultado = null;
        return $resultado;
    }

    public function listarEmpleados()
    {
        $this->db->select('*');
        $this->db->from('empleados');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }
}