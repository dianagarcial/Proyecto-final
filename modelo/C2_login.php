<?php
$usuario = htmlentities($_POST['usuario']);
$contraseña = htmlentities($_POST['clave']);


$cifrada = md5($contraseña);

session_start();
$_SESSION['usuario']=$usuario;

require_once('conexion.php');
$link=Db::conectar();

//$consulta = "SELECT * FROM usuario WHERE nomUsuario='$usuario' AND contrasena = '$contraseña'";
//$resultado = mysql_query($consulta, $link);

$consulta = $link-> query("SELECT * FROM usuario WHERE nomUsuario='$usuario' AND contrasena = '$cifrada'");

$consulta2 = $link-> query("SELECT tipoUsuario FROM usuario WHERE nomUsuario='$usuario'");

//$consulta = $link-> query("SELECT * FROM usuario WHERE nomUsuario='$usuario'");

$filas = $consulta->rowcount();

if ($filas){
   

    

    switch ($consulta2){
        case "Director":
            header("Location: ../vista/indexD.php");
            break;
        case "Profesor":
            header("Location: ../vista/indexP.php");
            break; 
    } 

        //header("Location: ../vista/indexD.php");
    
/*     }elseif($tipoU == "Profesor"){
        header("Location: ../vista/indexP.php");
    } */

   /*  if ($link-> query("SELECT * FROM usuario WHERE nomUsuario='$usuario' AND tipoUsuario ='Director'")){
        header("Location: ../vista/indexD.php");
    }elseif($link-> query("SELECT * FROM usuario WHERE nomUsuario='$usuario' AND tipoUsuario ='Profesor'")){
        header("Location: ../vista/indexP.php");
    }else{
        header("Location: ../vista/index.php");
    } */

}else {
    ?>
    <?php
    include("Location: ../vista/login.php");
    ?>
    echo'<script type="text/javascript">
        alert("Contraseña incorrecta");
        window.location.href="../vista/login.php";
        </script>';
    <?php
    
}

mysql_close($link);
mysql_close($link2);
?>