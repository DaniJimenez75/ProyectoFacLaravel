<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class clientesController extends Controller
{
    public function inicio(){
        return view('inicioClientes');

    }
}
