<?php
$usuario = htmlentities($_POST['usuario']);
$contraseña = htmlentities($_POST['clave']);


$cifrada = md5($contraseña);

session_start();
$_SESSION['usuario']=$usuario;

require_once('../modelo/conexion.php');
$link=Db::conectar();
//$consulta = "SELECT * FROM usuario WHERE nomUsuario='$usuario' AND contrasena = '$contraseña'";
//$resultado = mysql_query($consulta, $link);

$consulta = $link-> query("SELECT * FROM usuario WHERE nomUsuario='$usuario' AND contrasena = '$cifrada'");

//$consulta2 = $link-> query("SELECT tipoUsuario FROM usuario WHERE nomUsuario='$usuario'");

//$consulta = $link-> query("SELECT * FROM usuario WHERE nomUsuario='$usuario'");

$filas = $consulta->rowcount();

if ($filas){

    switch ($usuario){
        case "juan.carlos":
            header("Location: ../vista/indexD.php");
            break;
        case "jose.luis":  
            header("Location: ../vista/indexP.php");
            break;
    }

/*     switch ($tipoU[0]){
        case "Director":
            header("Location: ../vista/indexD.php");
            die();
            break;
        case "Profesor":
            header("Location: ../vista/indexP.php");
            die();
            break; 
    }   */

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

//$link -> closeCursor();
//$link ->db = null;
mysql_close($link);

//$link->close();
//mysql_close($link2);
