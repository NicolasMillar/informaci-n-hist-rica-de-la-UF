<?php

namespace App\Controllers;
use App\Models\Data;

class Home extends BaseController{

    public function index(){
        $data = new Data();
        $dato =  $data->listarDatos();
        $datos = [ "datos" => $dato];
        return view('welcome_message', $datos);
    }

    public function crear(){

    }

    public function actualizar(){

    }

    public function Obtenerid(){

    }
}
