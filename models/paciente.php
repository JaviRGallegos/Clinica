<?php

namespace Models; // Paciente está incluido en el namespace Models
use Lib\BaseDatos;

class Paciente extends BaseDatos{

    private string $id;
    private string $nombre;
    private string $apellidos;
    private string $correo;
    private string $pasword;
    
    function __construct()
    {
        parent::__construct();
    }
    

    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    
    public function getApellidos()
    {
        return $this->apellidos;
    }

    
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    
    public function getCorreo()
    {
        return $this->correo;
    }

    
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    
    public function getPasword()
    {
        return $this->pasword;
    }

    
    public function setPasword($pasword)
    {
        $this->pasword = $pasword;

        return $this;
    }
    
    public function getAll():?array{
        $this->consultar("SELECT * FROM pacientes");
        return $this->extraer_todos();
    }

    public function extraer_registro():?array{
        return ($pacient = $this->conexion->extraer_registro())?$pacient:null;

    }


}