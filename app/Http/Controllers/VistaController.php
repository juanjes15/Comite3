<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizViewController extends Controller
{
    public function index()
    {
        return [
            
            view('solicitud_comites.index'), 
            view('pruebas.index'), 
            view('programas.index'), 
            view('instructors.index'), 
            view('fichas.index'), 
            view('comites.index'), 
            view('aprendizs.index'), 
            view('aprendices_View.index'), 
            
          
        ];
        
    }
}


