<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_CONT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_MODEL');
        $this->load->model('Cita_MODEL');
        $this->load->model('Mensaje_MODEL');

    }

    public function index()
    {
        /*
         * En desarrollo
         */

    }
}
