<?php
namespace Controllers; // Incluimos FrontController en el namespace Controllers

use Controllers\ErrorController;

class FrontController{
    public static function main(){
        function show_error(){
            $error = new errorController();//usamos este controlador para mostrar los errores
            $error->index(); // Muestra el mensaje de que la página no existe
        }

        if(isset($_GET['controller'])){
            // Al llamarse todo igual acortamos la URL añadiendo directamente nosotros Controller.
            $nombre_controlador = 'Controllers\\'.$_GET['controller'].'Controller';
        }elseif(!isset($_GET['controller'])&& !isset($_GET['controller'])){
            $nombre_controlador = controller_default;// Se establece un archivo sin parametros
        }else{
            show_error();
            exit();
        }
        // Si todo va bien creamos una instancia del controlador y llamamos a la acción
         if(class_exists($nombre_controlador)){
                $controlador = new $nombre_controlador();

                if(isset($_GET['action'])&& method_exists($controlador,$_GET['action'])){
                    $action = $_GET['action'];
                    $controlador->$action();
                }elseif(!isset($_GET['controller'])&& !isset($_GET['controller'])){
                    $action_default = action_default;
                    $controlador->$action_default();
                }else{
                    show_error();
                }
    
            }else{
                show_error();
            }
    
        }
    }
