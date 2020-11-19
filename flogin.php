<?php 
  if(isset($_POST ['usu'])){
    include('conexion.php');
    $sql=new connection();
    $conexion = $sql-> get_conection();

    $consulta=("call paLogin(?,?)");
    $usuario=($_POST['usu']);
    $pass=($_POST['pass']);


    $rol=0;
    $inicio=0;

    $op=(4);
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



    if($sentencia = $conexion->prepare($consulta)){

      $sentencia->bind_param('ss',$usuario,$pass);

      $sentencia->execute();

      $sentencia->store_result();
      $inicio=$sentencia->num_rows();
      
      if($inicio<=0){
        echo "<script>alert('DATOS INCORRECTOS');history.go(-1)</script>";
        $desc=("Intento de ingreso al sistema");
        $ev=1;


      }else{

          $sql=new connection();
          $conexion = $sql-> get_conection();
          $sentencia = $conexion->prepare($consulta);
          $sentencia->bind_param('ss',$usuario,$pass);
          $sentencia ->execute();
          $sentencia->bind_result($usu,$password,$cod_rol);
          $sentencia->fetch();


         switch ($cod_rol) {
           case '1':
             header('Location: opcinesAdmin.php?usu=$usu') ;
             break;

             case '2':
             header('Location: opcinesDig.php');
             break;
           
           default:
             # code...
             break;
         }



      

        $desc=("Ingreso al sistema");
        $ev=2;
      }

          $sql=new connection();
          $con = $sql->get_conection();
          $consulta=("call paVit1(?,?,?,?,?,?)");
          $sentencia = $con->prepare($consulta);
          $sentencia->bind_param('ssssss',$usuario,$op,$ev,$direc,$desc,$fecha);
          $sentencia->execute();
          $sentencia->close();
    }
  }

    die();

?>
