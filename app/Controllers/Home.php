<?php

namespace App\Controllers;
use App\Models\Data;

class Home extends BaseController{

    public function index(){
        $database = new Data();
        $data =  $database->listarDatos();
        $mensaje = session('mensaje');
        $datos = [ 
            "datos" => $data,
            "mensaje" => $mensaje 
        ];
        return view('welcome_message', $datos);
    }

    public function crear(){
        $datos = [
            "nombreIndicador" => $_POST['nombreIndicador'],
            "codigoIndicador" => $_POST['codigoIndicador'],
            "unidadMedidaIndicador" => $_POST['unidadMedidaIndicador'],
            "valorIndicador" => $_POST['valorIndicador'],
            "fechaIndicador" => $_POST['fechaIndicador'],
            "tiempoIndicador" => $_POST['tiempoIndicador'], 
            "origenIndicador" => $_POST['origenIndicador']
        ];
        $database = new Data();
        $respuesta = $database->insertar($datos);
        if($respuesta > 0){
            return redirect()->to(base_url().'/')->whith('mensaje', 1);
        }else{
            return redirect()->to(base_url().'/')->whith('mensaje', 0);
        }
    }

    public function actualizar(){

    }

    public function Obtenerid($id){

    }

    public function eliminar($id){

    }
}
