<?php

include("../modelo/JP-cud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();

$listaAsignatura = $crud->mostrarASIG($_GET['asig']);

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
    <link href="css/estilosindexso.css" rel="stylesheet" />
    <link href="css/header.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <script src="/controlador/funcionarchivo.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    

</head>
    <?php require "headerD.php" ?>


    <div id="contenido">

    <h1>Asignatura 1</h1>
        


        <div class="limiter" id="contenedor">
            <div class="container-table100" id="tablaboton">
                <div class="wrap-table100">
                    <div class="table100 ver1">


                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table id="tablaini">
                                   
                                    <tr>

                                        <th>Documento</th>
                                        <th>Grupo</th>
                                        <th>Fecha entrega</th>
                                        <th>Estado</th>
                                        <th>Fecha Aprobación</th>
                                         

                                    </tr>

                                
                                    <tbody>
                                        <tr class="row100 body">
                                            <td class="cell100 column2">131313-1.1-1</td>
                                            <td class="cell100 column4">1</td>
                                            <td class="cell100 column6">Jose Luis Hernandez Zambrano</td>
                                            <td class="cell100 column6">Aprobada</td>
                                            <td class="cell100 column7">19-10-2021</td>
                                            <td class="cell100 column9"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                            

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">131313-3.1-1</td>
                                            <td class="cell100 column4">1</td>
                                            <td class="cell100 column6">Jose Luis Hernandez Zambrano</td>
                                            <td class="cell100 column6">Rechazada</td>
                                            <td class="cell100 column8">15-10-2021</td>
                                            <td class="cell100 column9"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                            

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">131313-1.1-52</td>
                                            <td class="cell100 column4">52</td>
                                            <td class="cell100 column6">Jose Luis Hernandez Zambrano</td>
                                            <td class="cell100 column5">Aprobada</td>
                                            <td class="cell100 column6">13-10-2021</td>
                                            <td class="cell100 column7"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                        </tr>


                                        <tr class="row100 body">
                                            <td class="cell100 column2">131313-3.1-52</td>
                                            <td class="cell100 column4">1</td>
                                            <td class="cell100 column6">Jose Luis Hernandez Zambrano</td>
                                            <td class="cell100 column6">Recibida</td>
                                            <td class="cell100 column8">13-10-2021</td>
                                            <td class="cell100 column9"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                            
                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">121212-2.1-2</td>
                                            <td class="cell100 column4">52</td>
                                            <td class="cell100 column6">Luz Estela Martinez Florez</td>
                                            <td class="cell100 column5">Aprobada</td>
                                            <td class="cell100 column6">09-10-2021</td>
                                            <td class="cell100 column7"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">121212-2.1-2</td>
                                            <td class="cell100 column4">2</td>
                                            <td class="cell100 column6">Hernando Aguilar Montaño</td>
                                            <td class="cell100 column5">Aprobada</td>
                                            <td class="cell100 column6">09-10-2021</td>
                                            <td class="cell100 column7"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">121212-2.1-2</td>
                                            <td class="cell100 column4">52</td>
                                            <td class="cell100 column6">Luz Estela Martinez Florez</td>
                                            <td class="cell100 column5">Aprobada</td>
                                            <td class="cell100 column6">09-10-2021</td>
                                            <td class="cell100 column7"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">121212-2.1-51</td>
                                            <td class="cell100 column4">2</td>
                                            <td class="cell100 column6">Hernando Aguilar Montaño</td>
                                            <td class="cell100 column5">Aprobada</td>
                                            <td class="cell100 column6">09-10-2021</td>
                                            <td class="cell100 column7"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">121212-3.1-52</td>
                                            <td class="cell100 column4">52</td>
                                            <td class="cell100 column6">Luz Estela Martinez Florez</td>
                                            <td class="cell100 column5">Rechazada</td>
                                            <td class="cell100 column6">09-10-2021</td>
                                            <td class="cell100 column7"><a href="revisionprof.php" id="vermas1">Ver más</a></td>
                                        </tr>

                                         

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>




    <?php require "footer.php" ?>

</body>
</html>