<?php
namespace Controllers; // Incluimos DoctorController en el namespace Controllers
use Services\DoctorService; // Usamos el servicio Doctor, que está incluido en el namespace Services

class DoctorController{
    private DoctorService $service;

    function __construct()
    {
        $this->service = new DoctorService;
    }

    public function listar(): void{
        $doctores = $this->service->getAll();
        require_once 'views/doctor/listar.php';
    }
}