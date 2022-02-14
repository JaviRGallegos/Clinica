<?php

namespace Models; // Doctor está incluido en el namespace Models


class Doctor
{
        function __construct(
                private string $id,
                private string $nombre,
                private string $apellidos,
                private string $telefono,
                private string $especialidad,
        ) {
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


        public function getTelefono()
        {
                return $this->telefono;
        }


        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }


        public function getEspecialidad()
        {
                return $this->especialidad;
        }


        public function setEspecialidad($especialidad)
        {
                $this->especialidad = $especialidad;

                return $this;
        }

        public static function fromArray(array $data): Doctor
        {
                return new Doctor(
                        $data['id'],
                        $data['nombre'],
                        $data['apellidos'],
                        $data['telefono'],
                        $data['especialidad'],
                ); // Este método permite hacer la correspondencia o mapeo
                // de cada array de un registro obtenido de la consulta de la base de datos a un objeto Doctor
        }
}
