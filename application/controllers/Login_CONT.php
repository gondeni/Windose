<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_CONT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_MODEL');

    }

    public function index()
    {
        switch ($this->session->userdata('permisos')) {
            case '':
                $this->load->view('util/head');
                $this->load->view('login_VIEW');
                $this->load->view('util/foot');
                break;
            case '1':
                redirect('Empleado_CONT');
                break;
            case '0':
                redirect('Cliente_CONT');
                break;
            default:
                $this->load->view('util/head');
                $this->load->view('login_VIEW');
                $this->load->view('util/foot');
                $this->session->sess_destroy();
                break;
        }
    }

    public function entrar()
    {

        $this->form_validation->set_rules('usuario', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]');

        if ($this->form_validation->run() == FALSE)
            $this->index();
        else {
            $usuario = $this->input->post('usuario');
            $password = $this->input->post('password');
            $usuario = $this->Login_MODEL->esUsuario($usuario, $password);
            if ($usuario) {

                $data = array(
                    'is_logued' => TRUE,
                    'ID' => $usuario->ID,
                    'nombre' => $usuario->nombre,
                    'usuario' => $usuario->usuario,
                    'permisos' => $usuario->permisos
                );
                $this->session->set_userdata($data);

            }
            $this->index();
        }


    }

    public function salir()
    {
        $this->session->sess_destroy();
        redirect('Login_CONT');
    }

}

?>