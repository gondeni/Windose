<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_MODEL extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function esUsuario($usuario,$password)
    {
        //Dependerá de la BBDD
        $this->db->from('empleados');
        $this->db->where('usuario',$usuario);
        $this->db->where('password',$password);
        $query = $this->db->get();
        if($query->num_rows() == 1)
            return $query->row();
        else{
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
            redirect(base_url().'index.php');
        }
    }
}