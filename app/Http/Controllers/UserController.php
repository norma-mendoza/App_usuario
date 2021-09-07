<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

if (request()->has('empty')){
       $users = [];
}else{
   
       $users = [
           'Samuel Melendez',
           'Pamela Rojas',
           'Carlos Palacios',
           'Mario Lopez',
           'yureily Mendoza',
           '<script>alert("Molestando")</script>'
       ];
}

$titulo ='Informe de Usuarios';



       return view('users.index', 
       [
           'users' => $users,
           'title' => $titulo
    ]);
    
   // return view('users', compact('title','users'));
    }
    
    public function show($id){
        return view('users.show', compact('id'));
       
    }
    

    public function create()
    {
        return "Crear nuevo Usuario";
    }

  
    
}
