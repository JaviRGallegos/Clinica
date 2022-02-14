<?php

namespace Services; // Incluimos DoctorService en el namespace Services

use Repositories\DoctorRepository; // Tiramos de DoctorRepository, incluido en el namespace Repositories

class DoctorService
{
    private DoctorRepository $repository; // Creamos una variable de tipo DoctorRepository
    function __construct()
    {
        $this->repository = new DoctorRepository(); 
    }

    public function getAll(): ?array // O devuelve void o devuelve un array
    {
        return $this->repository->getAll();
    }
}
