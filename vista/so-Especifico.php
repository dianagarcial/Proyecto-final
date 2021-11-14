<?php
//incluye la clase Libro y CrudLibro
include("../controlador/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud

$listarSoEspecifico=$crud->ConsultarSoEspecificoSOLO($_GET['id']);
$listarSo=$crud->ConsultarSoE($_GET['id']);
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


    <?php require "headerD.php" ?>
    <div id="contenido">

        
        <?php foreach ($listarSoEspecifico as $activid) {?>
            <h2 id="labelpe">SO-<?php echo $activid->getSo()?>. <?php echo $activid->getNomSo()?></h2>
                                       
            <?php 
            }
            ?>           
      

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
    
        
        <h3 class="hoja">Filtrar por PI</h3>

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
                                            <th>Actividades entregadas</th>

                                            <th>Actividades registradas</th>

                                            
                                            <th>Progreso</th>

                                        </tr>

                                    
                                    <tbody>
                                    <?php foreach ($listarSo as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getPi() ?></td>
				                        <td><?php echo $activid->getFentrega() ?></td>
				                        <td><?php echo $activid->getAprobada() ?> </td>
  
                                        <td><?php echo $activid->getTotal() ?> </td>
                                        
                                        <?php 
                                        $total= $activid->getTotal();
                                        $valor= $activid->getAprobada();
                                        $percent= round(($valor/$total)*100,0);
                                        ?>
                                        <td><?php echo $percent?>%</td>
                                        <td>
                                        <div class="prog">
                                                    <div class="bar"></div>
                                                </div>
                                        </td>
                                        
                                           
                                        
                                        <td><a id="vermas1" href="filtro-PI.php?id=<?php echo $activid->getPi()?> ">Ver más</a> </td>
				
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                    <?php if (is_null($activid->getPi())) {?>
                                        <td colspan="6">No se han registrado actividades a este Student Outcome</td>
                                    <?php 
                                    }     
                                    ?>

<style type="text/CSS">
                                        .prog {
                                        position: relative;
                                        width: 100%;
                                        height: 30px;
                                        background-color: white;
                                        border-radius: 10px;
                                        border: 1px solid #B1A7A6;
                                    }

                                        .bar {
                                        position: absolute;
                                        border-radius: 10px;
                                        width: <?php echo $percent?>%;
                                        height: 100%;
                                        background-color: #BA181B;
                                    }
                                        </style>
                                                
                                            

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
