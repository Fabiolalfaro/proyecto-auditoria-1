<?php
	session_start();

	if ($_SESSION["validar"]==""){
		header('Location: loginAuditoria.php');
	}
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    
    <!-- <link rel="stylesheet" href="css/estilo.css"> -->

    <title>AUDITORIA</title>
  </head>
  <body><br><center>
    <h3>Opciones</h3>
    <br><br><br>
  </center>

    <div class="container" align="center">
    <div class="row" align="center">

        <div class="col-sm-4">
          <div class="card">
            <div class="card-header">
              Partidas
            </div>
            <div class="card-body">
              <h5 class="card-title">
                
              </h5>
              <p class="card-text">
                
              </p>
              <a href="#" class="btn btn-primary">Nueva Partida</a>
              <br><br>
              <a href="#" class="btn btn-primary">Mostar Partidas</a>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header">
              Catalogo de Cuentas
            </div>
              <div class="card-body">
              <h5 class="card-title">
                
              </h5>
              <p class="card-text">
                
              </p>
              <a href="#" class="btn btn-primary">Nueva Cuenta</a>
                <br><br>
              <a href="#" class="btn btn-primary">Listar cuentas</a> 
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header">
              Usuarios
            </div>
            <div class="card-body">
              <h5 class="card-title">
                
              </h5>
              <p class="card-text">
                
              </p>              
              <a href="nUsuario.php" class="btn btn-primary">Nuevo usuario</a>
                <br><br>
              <a href="#" class="btn btn-primary">Listar Usuarios</a>  
            </div>
          </div>
        </div>
</div>
</div>


        
    </body>
</html>
