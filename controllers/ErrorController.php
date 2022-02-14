<?php

namespace Controllers; // Incluimos ErrorController en el namespace Controllers

class ErrorController{
    public function index(){
        echo "<h1>La pagina que buscas no existe</h1>";
    }
}