<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Facturas;
use App\Trabajadores;
use App\Proveedores;
use App\Albaranes;






class trabajadoresController extends Controller
{


   public function apartadoClientes(){
      $clientesMostrar = Clientes::all();

      return view('trabajadores.clientes.clientesTrabajador',["clientes"=>$clientesMostrar]);

   }
   public function apartadoHome(){

      return view('trabajadores.inicioTrabajadores');

   }
   
   public function apartadoFacturas(){
      $facturasMostrar = Facturas::all();

      return view('trabajadores.facturas.facturasTrabajador',["facturas"=>$facturasMostrar]);

   }


   public function formAgregarCliente(){
      return view('trabajadores.clientes.agregarCliente');
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

      return view('trabajadores.clientes.editarCliente',["clientes"=>$cliente]);

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

   public function eliminarCliente($id) {
    	
      $project = Clientes::findOrFail($id);
      $project->delete();
      return redirect('/clientesTrabajadores')->with('status','Cliente borrado');


   }


   
   public function formAgregarFactura(){
      return view('trabajadores.facturas.agregarFactura');
   }

   public function agregarFactura(Request $request){
        $fecha = $request->fecha;   	
        $descripcion = $request->descripcion;
        $precio  = $request->precio ;
        $idCliente = $request->idCliente;



    	$facturas = new Facturas;
      $facturas->fecha = $fecha;
      $facturas->descripcion = $descripcion;
      $facturas->precio = $precio;
      $facturas->idCliente = $idCliente;
      $facturas->save();
       
       return redirect('/facturasTrabajadores')->with('status','Alta correcta');

   }

   public function formEditarFactura($idFactura){
      $factura = Facturas::findOrFail($idFactura);

      return view('trabajadores.facturas.editarFactura',["facturas"=>$factura]);

   }

   public function editarFactura(Request $request, $id){
      $facturas = Facturas::findOrFail($id);
        
      $fecha = $request->fecha;   	
      $descripcion = $request->descripcion;
      $precio  = $request->precio ;
      $idCliente = $request->idCliente;

      $facturas->fecha = $fecha;
      $facturas->descripcion = $descripcion;
      $facturas->precio = $precio;
      $facturas->idCliente = $idCliente;

      $facturas->save();

      return redirect('/facturasTrabajadores')->with('status','Factura editada');


   }

   public function eliminarFactura($id) {
    	
      $factura = Facturas::findOrFail($id);
      $factura->delete();
      return redirect('/facturasTrabajadores')->with('status','Factura eliminada');


   }

}
