<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_MODEL extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function alta($ID=null,$usuario,$password,$nombre,$ciudad,$telefono,$email,$preferencia,$coach=null)
    {
        $data = array(
            'ID' => $ID,
            'usuario' => $usuario,
            'password' => $password,
            'nombre' => $nombre,
            'ciudad' => $ciudad,
            'telefono' => $telefono,
            'email' => $email,
            'preferencia' => $preferencia,
            'coach' => $coach
        );
        $this->db->insert('clientes', $data);
    }

    public function buscarCliente($ID){

        $this->db->select('*');
        $this->db->from('clientes');
        $this->db->where('ID',$ID);
        $consulta=$this->db->get();
        $resultado=$consulta->result();
        return $resultado;
    }
    public function listarClientes(){

        $this->db->select('*');
        $this->db->from('clientes');
        $consulta=$this->db->get();
        $resultado=$consulta->result();
        return $resultado;
    }
}
