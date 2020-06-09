<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;


class trabajadoresController extends Controller
{


   public function apartadoClientes(){
      $clientesMostrar = Clientes::all();

      return view('trabajadores.clientesTrabajador',["clientes"=>$clientesMostrar]);

   }

   public function formAgregarCliente(){
      return view('trabajadores.agregarCliente');
   }

   public function agregarCliente(Request $request){
        $username = $request->username;   	
        $nombre = $request->nombre;
        $apellidos = $request->apellidos;
        $email = $request->email;
        $telefono = $request->telefono;
        $ciudad = $request->ciudad;
        $password = $request->password;


    	$cliente = new Clientes;
      $cliente->username = $username;
      $cliente->nombre = $nombre;
      $cliente->apellidos = $apellidos;
      $cliente->email = $email;
      $cliente->telefono = $telefono;
      $cliente->ciudad = $ciudad;
      $cliente->password = $password;
      $cliente->save();
       
       return redirect('/clientesTrabajadores')->with('status','Alta correcta');

   }

   public function formEditarCliente($idCliente){
      $cliente = Clientes::findOrFail($idCliente);

      return view('trabajadores.editarCliente',["clientes"=>$cliente]);

   }

   public function editarCliente(Request $request, $id){
      $cliente = Clientes::findOrFail($id);
        
      $username = $request->username;   	
      $nombre = $request->nombre;
      $apellidos = $request->apellidos;
      $email = $request->email;
      $telefono = $request->telefono;
      $ciudad = $request->ciudad;
      $password = $request->password;

      $cliente->username = $username;
      $cliente->nombre = $nombre;
      $cliente->apellidos = $apellidos;
      $cliente->email = $email;
      $cliente->telefono = $telefono;
      $cliente->ciudad = $ciudad;
      $cliente->password = $password;

      $cliente->save();

      return redirect('/clientesTrabajadores')->with('status','Actualitzación correcta');

   }
}
