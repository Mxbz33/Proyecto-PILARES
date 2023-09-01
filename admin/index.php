<?php
if($_POST){
  header('Location:inicio.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>CMS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <br><br>
  <div class="container">
    <div class="row">

<div class="col-md-4">
    
</div>

        <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Log in
            </div>
            <div class="card-body">

<form method="POST">

<div class = "form-group">
<label for="exampleInputEmail1">Usuario: </label>
<input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Contraseña: </label>
<input type="password" class="form-control" name="password" placeholder="Password">
</div>

<button type="submit" class="btn btn-primary">Acceder al sistema administrador</button>
</form>

            </div>

        </div>

        </div>
        
    </div>
  </div>

  </body>
</html>