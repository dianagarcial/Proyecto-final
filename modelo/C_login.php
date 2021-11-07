<? 
/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */ 
/* $link = mysql_connect("localhost","root","123456"); 
mysql_select_db("base_datos", $link); */

require_once('conexion.php');

/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL. */ 
$myusuario = mysql_query("select nomUsuario from usuario where nomUsuario = '".htmlentities($_POST["usuario"])."'",$link); 
$nmyusuario = mysql_num_rows($myusuario); 

//Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario... 
if($nmyusuario != 0)
{ 
  $sql = "select nomUsuario from usuarios where nomUsuario = '".htmlentities($_POST["usuario"])."' and contrasena = '".md5(htmlentities($_POST["clave"]))."'"; 
  $myclave = mysql_query($sql,$link); 
  $nmyclave = mysql_num_rows($myclave); 
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
  if($nmyclave != 0)
  { 
      session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 
      header ("Location: indexP.php"); 
   }
   else{ 
      //echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"login.php\"</script>"; 
      //echo "<script language="javascript">alert('Contreseña incorrecta '); window.location.href=\"login.php\"</script>';
      echo'<script type="text/javascript">
        alert("Contraseña incorrecta");
        window.location.href="../vista/login.php";
        </script>';
   } 
}
else
{ 
    echo"<script>alert('El usuario no existe.'); window.location.href=\"login.php\"</script>"; 
} 
mysql_close($link); ?>