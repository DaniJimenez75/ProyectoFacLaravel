<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">

    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background-color:#878778">
    <hr>

<form method="POST" action="{{url('/inicio')}}">
@csrf
  <div class="container login-container">
  <div class="row">
    <div class=" col-md-6 offset-md-3 offset-lg-2 login-form-2">
        <h3>Sistema de facturación</h3>
        
          <br>
             <div class="form-group">
            <label for="exampleFormControlSelect1">Elige si eres Cliente o Trabajador</label>
                <select class="form-control" id="exampleFormControlSelect1" name="rol">
                <option>Trabajador</option>
                <option>Cliente</option>
            </select>
             </div>
              <div class="form-group">
                <input type="text" name="username" placeholder="Coloca aqui tu email" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Coloca aqui tu password" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success my-2 my-sm-0">Acceso</button>
              </div>
              @if(session('status'))
	  {{session('status')}}
    @endif

      </div>


    
  </div>
</div>
</form>
</body>
</html>