<?php

if($_POST){
    header('location:inicio.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                
            </div>
            
            <div class="col-md-4">
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <div class="card">

                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="POST" >

                            <div class = "form-group">
                                <label>Usuario</label>
                                <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu usuario">
                                <small id="emailHelp" class="form-text text-muted">No compartas nunca tu usuario.</small>
                            </div>

                            <div class="form-group">
                                <label>Contraseña</label>
                                <input name="contraseña" type="password" class="form-control" id="exampleInputPassword1" placeholder="Escribe tu contraseña">
                            </div>

                            <button type="submit" class="btn btn-primary">Entrar al sistema</button>

                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    </body>