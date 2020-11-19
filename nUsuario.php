<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" href="css/estilo.css"> -->

    <title>Nuevo Usuario</title>
  </head>
  <body><br><center>
    <h3>Registrar nuevo usuario</h3>
    <form class="" action="fNUsu.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4"><br>
              <div class="col-md-12">
                <label for="">Usuario:</label>
                <input class="form-control" type="text" name="usuario" placeholder="Usuario">
              </div>
              <div class="col-md-12">
                <label for="">Contraseña:</label>
                <input class="form-control" type="password" name="passw" placeholder="Contraseña">
              </div>
              <div class="col-md-12">
                <label for="">Nombres:</label>
                <input class="form-control" type="text" name="nombres" placeholder="Nombres">
              </div>
              <div class="col-md-12">
                <label for="">Apellidos:</label>
                <input class="form-control" type="text" name="apellidos" placeholder="Apellidos">
              </div>

              <div class="col-md-12">
                <label for="">Rol de Usuario:</label>
                <select class="form-control" name='rol' placeholder="Rol de usuario">

                  <option value=1>Administrador</option>
                  <option value=3>Opreador</option>
                  <option value=2>Digitador</option>
                </select>
              </div>


              <div class="col-md-12"><hr>
                <input class="form-control btn btn-primary btn-block" type="submit" value="Enviar">
              </div>
              

          </div>

        </div>
      </div>
    </div>

    </form>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery/jquery.min.js"></script>
  </body>
</html>

<?php 

	include('conexion.php');
    $sql=new connection();

    $op=(3);
    $ev=(3);
    $time = time();
    $fecha=(date("d-m-Y (H:i:s)", $time));

    function getRealIP() {

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
           
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
       
        return $_SERVER['REMOTE_ADDR'];
    }

    $direc=(getRealIP());

    $desc='Se ingreso a la opcion Usuario';
    $usuario= 'MXRF001';


    $con = $sql->get_conection();
    $consulta=("call paVit1(?,?,?,?,?,?)");
    $sentencia = $con->prepare($consulta);
    $sentencia->bind_param('ssssss',$usuario,$op,$ev,$direc,$desc,$fecha);
    $sentencia->execute();
    $sentencia->close();


?>
