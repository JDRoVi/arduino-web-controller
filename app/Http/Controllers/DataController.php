<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Log;
class DataController extends Controller
{
    function construct(){}
    public function invoke(){}
    public function index(){
        $data = Data::all();
        if(!empty($data)){
            $response = array(
                'status' => 'success',
                'code' => 200,
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'No hay datos'
            );
        }
        return response()->json($response, $response['code']);
    }
    public function index_list(){
        $data = Data::all();
        if(!empty($data)){
            $response = array(
                'status' => 'success',
                'code' => 200,
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'No hay datos'
            );
        }
       
        return view('index', compact('data'));
    }
    public function store(Request $request){
     
        if(!empty($request)){
            $mensaje = new Data();
            $mensaje -> tarea = $request->input('tarea');
            $mensaje -> fecha = $request->input('descripcion');
            $mensaje -> fecha = $request->input('fecha');

            Data::create($request->all());
            $response = array(
                'status' => 'success',
                'code' => 200,
                'message' => 'Tarea registrada'
            );
        } else {
            $response = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'No hay datos'
            );
        }
        return redirect()->back()->withInput();
    }
    public function store_data(Request $request){
        $json = $request -> input('json', null);
        $data = json_decode($json, true);
        if(!empty($data)){
            $mensaje = new Data();
            $mensaje -> id = $data['id'];
            $mensaje -> tarea = $data['tarea'];
            $mensaje -> fecha = $data['fecha'];
            $mensaje -> descripcion = $data['descripcion'];
            $response = array(
                'status' => 'success',
                'code' => 200,
                'message' => 'Tarea registrada'
            );
        } else {
            $response = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'No hay datos'
            );
        }
        return response()->json($response, $response['code']);
    }
}
