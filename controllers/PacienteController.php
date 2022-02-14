<?php

namespace Controllers; // Incluimos PacienteController en el namespace Controllers
use Models\Paciente; // Usamos el modelo Paciente, que está guardado dentro del namespace Models

class PacienteController extends Paciente{
    
    function __construct()
    {
        parent::__construct();
    }

    
    public function mostrarTodos(){
        $todos_mis_pacientes = $this->getAll();
        require_once 'views/paciente/mostrar_todos.php';
    }

    public function mensaje(){
        require_once 'views/paciente/default.php';
    }
}