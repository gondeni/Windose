<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_MODEL extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function esUsuario($usuario, $password)
    {
        /*
         * Con esto se consiguen mensajes de error en la carpeta logs
         * log_message('error', $usuario);
         * log_message('error', $password);
        */

        log_message('error', $usuario);
        log_message('error', $password);
        //En la tabla empleados los datos deberían estar encriptados pero aun no lo estan.

        $this->db->from('empleados');
        $this->db->where('usuario', $usuario);
        $query = $this->db->get();
        if ($query->num_rows() == 1)
            return $query->row();
        else {
            $this->db->from('clientes');
            $this->db->where('usuario',$usuario);
            $query = $this->db->get();
            if ($query->num_rows() == 1) {
                $check = $this->PasswordHash->CheckPassword($password);
                return $query->row();
            }
            else {
                $this->session->set_flashdata('usuario_incorrecto', 'Los datos introducidos son incorrectos');
                redirect(base_url() . 'index.php/Login_CONT');
            }
        }
    }
}