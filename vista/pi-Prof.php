<?php
//incluye la clase Libro y CrudLibro
include("../modelo/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud
//$activid=$crud->obtenerpiselc($_GET['pi']);
$activid=$crud->obtenerpiselc('1.1');
?>
<!DOCTYPE html>
<html>
<head>
    <title>GesABET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/estilosSO.css" rel="stylesheet" />
    <link href="css/header.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <script src="/controlador/main.js"></script>
    <?php require "headerP.php" ?>
    <div id="contenido">
    <div id="imghead">
        <label for="abrir-cerrar">   
                <img id="menu" alt="Imagen no disponible" src="imagenes/menu.png" /> </label>
        
                <a href="/index.html"><img id="logo" alt="Imagen no disponible" src="imagenes/Logos.png" /></a>
                <a href="#"><img id="notif" alt="Imagen no disponible" src="imagenes/notifications.png" /></a>
                <a href="#"><img id="perfil" alt="Imagen no disponible" src="imagenes/Perfil.png" /></a>
            </div>       

        <h1>PI <?php echo $activid-> getPi()?>. <?php echo $activid-> getNomPi()?></h1>
        
        
        
      

        <div class="limiter" id="contenedor">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1">
                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table>
                                    
                                        <tr>

                                            <th>PI</th>

                                            <th>Ult. modificación</th>

                                            <th>No. documentos</th>

                                            <th>Progreso</th>

                                        </tr>

                                    
                                    <tbody>
                                        <tr class="row100 body">
                                            <td class="cell100 column2">PI 1</td>
                                            <td class="cell100 column3">12-12-2020</td>
                                            <td class="cell100 column4">30 </td>
                                            <td class="cell100 column5">
                                                <div id="myProgress1">
                                                    <div id="myBar1"></div>
                                                </div>
                                            </td>
                                            <td class="cell100 column6"><a href="so1.html " id="vermas1">Ver más</a></td>
                                            

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">PI 2</td>
                                            <td class="cell100 column3">12-12-2020</td>
                                            <td class="cell100 column4">10</td>
                                            <td class="cell100 column5">
                                                <div id="myProgress2">
                                                    <div id="myBar2"></div>
                                                </div>
                                            </td>
                                            <td class="cell100 column6"><a href="# " id="vermas1">Ver más</a></td>

                                        </tr>

                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="descarga">Descargar análisis del SO1</button>
            <br>
            <br>
            <br>
        </div>

     
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php require "footer.php" ?>

    