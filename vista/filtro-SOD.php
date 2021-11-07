<?php
//incluye la clase Libro y CrudLibro
include("../modelo/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud

$listarSO=$crud->ConsultarSO();

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
    <link href="estilosindexso.css" rel="stylesheet" />
    <link href="css/header.css" rel="stylesheet" />
    <link href="css/filtros.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    
    



    <?php require "headerD.php" ?>

<div id="contenido">
       


                <h1>Filtro por Student Outcomes</h1>
                <h2>Seleccionar el S.O</h2>

                <div class="limiter" id="contenedor">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100 ver1">
                            <table id=tablefiltro>
                                      
                                 <?php foreach ($listarSO as $activid) {?>
                                <td id="lfiltro2"><a href="#">SO<?php echo $activid->getSo() ?> </a></td>
                                <td id="lineafiltro2"><img  src="imagenes/lineafiltro.png"/></td>   
                                   
                                                    
                                
                                        <?php 
                                    }
                                    ?>       
                            
                            </table>
                        </div>
                    </div>
                </div>
                

        <h1>Vista general de la documentación</h1>
        


        <div class="limiter" id="contenedor">
            <div class="container-table100" id="tablaboton">
                <div class="wrap-table100">
                    <div class="table100 ver1">


                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table id="tablaini">
                                   
                                    <tr>

                                        <th>Documento</th>

                                        <th>Asignatura</th>

                                        <th>Estado</th>

                                        <th>Fecha</th>

                                        <th>Tipo</th>

                                        

                                    </tr>

                                
                                    <tbody>
                                        <tr class="row100 body">
                                            <td class="cell100 column2">Documento1</td>
                                            <td class="cell100 column3">Asignatura1</td>
                                            <td class="cell100 column4">Aprobado</td>
                                            <td class="cell100 column5">
                                                12-12-2021
                                            </td>
                                            <td class="cell100 column6">Rúbrica</td>
                                            <td class="cell100 column7"><a href="#" id="vermas1">Ver más</a></td>
                                            

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">Documento2</td>
                                            <td class="cell100 column3">Asignatura2</td>
                                            <td class="cell100 column4">Revisión</td>
                                            <td class="cell100 column5">12-12-2021
                                            </td>
                                            <td class="cell100 column6">Rúbrica</td>
                                            <td class="cell100 column7"><a href="# " id="vermas1">Ver más</a></td>

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">Documento3</td>
                                            <td class="cell100 column3">Asignatura3</td>
                                            <td class="cell100 column4">Aprobado</td>
                                            <td class="cell100 column5">12-12-2021
                                            </td>
                                            <td class="cell100 column6">Evidencia</td>
                                            <td class="cell100 column7"><a href="# " id="vermas1">Ver más</a></td>

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">Documento4</td>
                                            <td class="cell100 column3">Asignatura4</td>
                                            <td class="cell100 column4">Rechazado</td>
                                            <td class="cell100 column5">12-12-2021
                                            </td>
                                            <td class="cell100 column6">Evidencia</td>
                                            <td class="cell100 column7"><a href="# " id="vermas1">Ver más</a></td>

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">Documento5</td>
                                            <td class="cell100 column3">Asignatura5</td>
                                            <td class="cell100 column4">Aprobado</td>
                                            <td class="cell100 column5">12-12-2021
                                            </td>
                                            <td class="cell100 column6">Análisis</td>
                                            <td class="cell100 column7"><a href="# " id="vermas1">Ver más</a></td>

                                        </tr>

                                        <tr class="row100 body">
                                            <td class="cell100 column2">Documento6</td>
                                            <td class="cell100 column3">Asignatura6</td>
                                            <td class="cell100 column4">Revisión
                                            </td>
                                            <td class="cell100 column5">12-12-2021
                                            </td>
                                            <td class="cell100 column6">Análisis</td>

                                            <td class="cell100 column7"><a href="# " id="vermas1">Ver más</a></td>

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
        <br>
        <br>
        
        <?php require "footer.php" ?>
    
   
    
      
</body>
</html>