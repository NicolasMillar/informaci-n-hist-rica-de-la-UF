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
            return redirect()->to(base_url().'/')->with('mensaje', 1);
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', 0);
        }
    }

    public function actualizar(){
        $datos = [
            "nombreIndicador" => $_POST['nombreIndicador'],
            "codigoIndicador" => $_POST['codigoIndicador'],
            "unidadMedidaIndicador" => $_POST['unidadMedidaIndicador'],
            "valorIndicador" => $_POST['valorIndicador'],
            "fechaIndicador" => $_POST['fechaIndicador'],
            "tiempoIndicador" => $_POST['tiempoIndicador'], 
            "origenIndicador" => $_POST['origenIndicador']
        ];
        $id = $_POST['id'];
        $database = new Data();
        $respuesta = $database->actualizar($datos,$id);
        if($respuesta){
            return redirect()->to(base_url().'/')->with('mensaje', 2);
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', 3);
        }
    }

    public function Obtenerid($id){
        $data = ["id" => $id];
        $database = new Data();
        $respuesta = $database->obtenerDatos($data);
        $datos = ["datos" => $respuesta];
        return view('actualizar', $datos);
    }

    public function eliminar($id){
        $database = new Data();
        $data = ["id" => $id];
        $respuesta = $database->eliminar($data);
        if($respuesta){
            return redirect()->to(base_url().'/')->with('mensaje', 4);
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', 5);
        }
    }
}
