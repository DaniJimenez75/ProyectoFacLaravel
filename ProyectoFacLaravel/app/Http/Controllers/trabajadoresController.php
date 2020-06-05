<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajadores;

class trabajadoresController extends Controller
{
   public function inicio(){
    return view('inicioTrabajadores');

   }
}
