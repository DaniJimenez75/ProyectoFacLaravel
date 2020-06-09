<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script type="text/javascript" src="js/bootstrap.js"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="indexTreballador.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/clientesTrabajadores')}}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/facturasTrabajadores')}}">Facturas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/albaranesTrabajadores')}}">Albaranes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/proveedoresTrabajadores')}}">Proveedores</a>
      </li>

    </ul>
  </div>
</nav>
<h1 style="text-align:center"> Bienvenido Trabajador</h1>
@if(session('status'))
	  {{session('status')}}
    @endif
</body>
</html>