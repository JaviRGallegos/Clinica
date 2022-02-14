<?php
require_once "autoload.php"; //auto-cargar clases.
require_once './config/config.php';
require_once './config/parameters.php';
require_once 'views/header.php';

use Controllers\PacienteController;
use Controllers\DoctorController;
use Models\Doctor;
use Lib\BaseDatos;
use Models\Paciente;

require_once 'controllers/FrontController.php';

use Controllers\FrontController;
FrontController::main() // Llamamos al método main de la clase FrontController

?>

<nav>
    <ul>
        <li>
            <a href="<?php base_url ?>index.php?controller=Paciente&action=mostrarTodos">Mostrar todos mis pacientes</a>
        </li>
        <!--URL paciente/mostrar_todos.php -->
        <br>
        <li>
            <a href="<?php base_url ?>index.php?controller=Doctor&action=listar">Listado de médicos</a>
        </li>

    </ul>
</nav>
<?php

require_once 'views/footer.php';

?>