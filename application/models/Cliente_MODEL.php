<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_MODEL extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
//        $this->load->library('PasswordHash', array(8, FALSE));
    }

    public function alta($ID = null, $usuario, $password, $nombre, $ciudad, $telefono, $email, $preferencia, $coach = null)
    {
        $this->db->set('usuario', $usuario);
        $this->db->set('password', getHashedPassword($password));
        $this->db->set('nombre', $nombre);
        $this->db->set('ciudad', $ciudad);
        $this->db->set('telefono', $telefono);
        $this->db->set('email', $email);
        $this->db->set('preferencia', $preferencia);
        $this->db->insert('clientes');
    }

    public function buscarCliente($ID)
    {

        $this->db->select("*");
        $this->db->from('clientes');
        $this->db->where('ID', $ID);
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function listarClientes()
    {

        $this->db->select('*');
        $this->db->from('clientes');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }
}
