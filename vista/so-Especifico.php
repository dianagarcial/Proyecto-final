<?php
//incluye la clase Libro y CrudLibro
include("../modelo/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud

$listarSoEspecifico=$crud->ConsultarSoEspecificoSOLO($_GET['id']);

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
    <link href="css/estilosSO.css" rel="stylesheet" />
    <link href="css/header.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />


    <?php require "headerD.php" ?>
    <div id="contenido">

        
        <?php foreach ($listarSoEspecifico as $activid) {?>
            <h1 class="so">SO-<?php echo $activid->getSo()?>. <?php echo $activid->getNomSo()?></h1>
                                       
            <?php 
            }
            ?>

        
        <h2 class="so" >Los problemas complejos de ingeniería incluyen una o más de las siguientes características: implican problemas técnicos de gran alcance o conflictivos, no tienen una solución obvia, abordan problemas no incluidos en los actuales estándares y códigos, involucran a diversos grupos de interesados, incluyen diferentes partes, componentes o sub-problemas, involucran múltiples disciplinas, o tiene consecuencias significativas en una ámplia variedad de contextos.</h2>
        
      

        <div class="limiter" id="contenedor">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1">
                        
                        <label id="labelpe">Periodo académico </label>
                            <select id="selectPeriodo">
                                <option value="2021-3">2021-3</option>
                                 <option value="2021-1">2021-1</option>                           
                        </select>
                           
                    </div>
                </div>
            </div>
        </div>
    
        
        <h3>Filtrar por PI</h3>

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

                                            <th>Actividades registradas</th>

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
    </div>
   
    <?php require "footer.php" ?>


 
        
      



</body>
</html>
