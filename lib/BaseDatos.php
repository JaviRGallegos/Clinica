<?php
namespace Lib;
use PDO;
use PDOException;

class BaseDatos extends PDO
{
   private PDO $conexion;
   private mixed $resultado;
   public function __construct(
    private $tipo_base='mysql',
    private string $servidor= SERVIDOR,
    private string $usuario= USUARIO,
    private string $clave= PASS,
    private string $basedatos=BASE_DATOS)
    {    
        try {
            $dbDatos = "mysql:host=" . $this->servidor . ";dbname=" . $this->basedatos;
            $this->conexion = new PDO($dbDatos, $this->usuario, $this->clave);
        }
        catch (PDOException $e) {
            echo "Error: $e";
        }
    }
    
    public function consultar($consultaSQL) :void{
        $this->resultado = $this->conexion->query($consultaSQL);

    }
    public function extraer_registro() :mixed{
        return($fila = $this->resultado->fetch(PDO::FETCH_ASSOC))? $fila:false;//devuelve array. fetch
    }
    public function extraer_todos() :mixed{
        return $this->resultado->fetchAll(PDO::FETCH_ASSOC);//devuelve array. fetchall
    }

}