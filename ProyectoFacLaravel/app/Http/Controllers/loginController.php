<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Trabajadores;
class loginController extends Controller
{

    public function paginaTrabajador(){
        return view('inicioTrabajadores');

    }

    public function paginaCliente(){
        return view('inicioClientes');

    }

    public function login(Request $request) {
      
        $username = $request->username;
        $password = $request->password;
        $rol = $request->rol;

       

        $clientes = Clientes::all();
        foreach($clientes as $g){
            if($g->username == $username && $g->password == $password){
                return redirect('/cliente')->with('status','Alta correcta');

            }else{
                return redirect('/')->with('status','Datos introducidos no correctos');

            }
        }
    

        $trabajador = Trabajadores::all();
        foreach($trabajador as $g){
            if($g->username == $username && $g->password == $password){
                return redirect('/trabajador')->with('status','Alta correcta');

            }else{
                return redirect('/')->with('status','Datos introducidos no correctos');

            }
        }
    }
}
    
