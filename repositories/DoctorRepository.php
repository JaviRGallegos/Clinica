<?php

namespace Repositories; // Creamos el namespace Repositories, en el que incluiremos DoctorRepository

use Lib\BaseDatos; // Usamos la bd, que está incluida en el namespace Lib
use Models\Doctor; // Tiramos del modelo Doctor, que está guardado en el namespace Models

class DoctorRepository
{
    private BaseDatos $conexion; // ??????

    function __construct()
    {
        $this->conexion = new BaseDatos(); // Creamos una nueva Base de Datos
    }

    public function getAll(): ?array
    {
        $this->conexion->consultar("SELECT * FROM doctores");
        return $this->extraer_todos();
    }

    private function extrear_registro(): ?Doctor // O devuelve void o devuelve un objeto Doctor
    {
        return ($doctor = $this->conexion->extraer_registro()) ? Doctor::fromArray($doctor) : null;
    }

    private function extraer_todos(): ?array{ // Devuelve void o devuelve un array
        /* Hacemos un mapeo a la clase del modelo de datos Doctor.
        Si alguno de los tipos de datos de alguno de los campos no se corresponde con los de
        las propiedades de la clase se produce un error, que nos indicará que la información recibida
        no puede ser transformada en una instancia de la clase Doctor.
        Devolvemos un array que consta únicamente de objetos de tipo Doctor */

        $doctores = [];
        $doctoresData = $this->conexion->extraer_todos();
        
        foreach($doctoresData as $doctorData){
            $doctores[] = Doctor::fromArray($doctorData); // Mapeo del objeto Doctor usando el método del modelo Doctor
        }
        return $doctores;
    }
}