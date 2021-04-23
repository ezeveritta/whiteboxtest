<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Formulario_model');
    }

	public function index()
	{
		$this->load->view('formulario');
	}

    public function lets_post_it() {
        $data = array(
            'nombre'=> $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'dni' => $this->input->post('dni'),
            'hora' => 'NOW()'
        );

        $result = $this->Formulario_model->insertar($data);

        if ($result)
        {
            $this->load->view('submitted')
        }
        else
        {
            $this->load->view('error')
        }
    } 
}
