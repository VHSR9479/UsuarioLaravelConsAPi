<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $usuarios = Http::get('https://jsonplaceholder.typicode.com/users');
        $arrayUsuarios = $usuarios->json();
        // echo json_encode($arrayUsuarios);
        return view('usuario',compact('arrayUsuarios'));
    }
}
