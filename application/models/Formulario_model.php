<?php

class Formulario_model extends CI_Model {

    public $nombre;
    public $apellido;
    public $dni;
    public $hora;

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDni() {
        return $this->dni;
    }

    function getHora() {
        return $this->hora;
    }
    
    function setNombre($data) {
        $this->nombre = $data;
    }

    function setApellido($data) {
        $this->apellido = $data;
    }

    function setDni($data) {
        $this->dni = $data;
    }

    function setHora($data) {
        $this->hora = $data;
    }

    function __construct() {
        parent::__construct();
    }
    public function insertar($data)
    {
        $query = $this->db->insert('info', $data);

        return $query;
    }

    public function form_list() {
        return
                        $this->db->select('*')
                        ->from('info')
                        ->get()
                        ->result_array();
    }
}