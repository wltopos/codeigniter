<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{

    private $usuarioModel;
    public function __contruct(){
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }
    public function index()
    {
        $this->usuarioModel->findAll();
    }
}
