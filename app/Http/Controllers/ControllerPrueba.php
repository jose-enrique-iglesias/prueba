<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrueba extends Controller
{
    public function index(){
        $numero_1 = 15;
        $numero_2 = 4;
        if($numero_1 >  $numero_2){
            $res = $numero_1;
        }
        else{
            $res = $numero_2;
        }
        $datos = array($numero_1,$numero_2,$res);
        return view('Ejemplo_1', compact('datos'));
    }
    
    public function ejemplo2_respuesta(Request $request){
        $numero_1 = $request->post('numero1');
        $numero_2 = $request->post('numero2');
        if($numero_1 >  $numero_2){
            $res = $numero_1;
        }
        else{
            $res = $numero_2;
        }
        echo json_encode(array('0'=>$res)); 
    }

    public function ejemplo2(){
        return view('ejemplo2');
    }
}
