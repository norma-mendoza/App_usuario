<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($nombre, $apodo = null){
        if ($apodo){ 
            return "Bienvenido {$nombre},tu appodo es {$apodo}";
        }else{
            return "Bienvenido {$nombre}, no tienes apodo";
        }
    }

}
