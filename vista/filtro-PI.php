<?php

include("../controlador/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();

$activid=$crud->obtenerpiselc($_GET['id']);
$listarPiEspecifico=$crud->obtenerpi($_GET['id']);

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
    <?php require "headerD.php" ?>
    <div id="contenido">
     

        <h1>PI <?php echo $activid-> getPi()?>. <?php echo $activid-> getGrupo()?></h1>
        
        
        
      

        <div class="limiter" id="contenedor">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1">
                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table>
                                    
                                        <tr>

                                            <th>Codigo Asignatura</th>
                                            <th>Nombre Asignatura</th>

                                            <th>Ult. modificación</th>

                                            <th>Actividades entregadas</th>

                                            <th>Actividades registradas</th>

                                            
                                            <th>Progreso</th>

                                        </tr>

                                    
                                        <tbody>
                                        <?php foreach ($listarPiEspecifico as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getPi() ?></td>
                                        <td><?php echo $activid->getNomAsig() ?></td>
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
                                        <div class="prog<?php echo $activid->getPi()?>">
                                                    <div class="bar<?php echo $activid->getPi()?>"></div>
                                                </div>
                                        </td>
                                        
                                           
                                        
                                        <td><a id="vermas1" href="filtro-PI.php?id=<?php echo $activid->getPi()?> ">Ver más</a> </td>
				
                                    </tr>
                                    

                                    <style type="text/CSS">
                                        .prog552203{
                                            position: relative;
                                        width: 100%;
                                        height: 30px;
                                        background-color: white;
                                        border-radius: 10px;
                                        border: 1px solid #B1A7A6;
                                    }

                                        .bar552203{
                                        position: absolute;
                                        border-radius: 10px;
                                        width: <?php echo $percent?>%;                            
                                        
                                       
                                        height: 100%;
                                        background-color: #BA181B;
                                    }
                                    .prog553002{
                                            position: relative;
                                        width: 100%;
                                        height: 30px;
                                        background-color: white;
                                        border-radius: 10px;
                                        border: 1px solid #B1A7A6;
                                    }

                                        .bar553002{
                                        position: absolute;
                                        border-radius: 10px;
                                        width: <?php echo $percent?>%;                            
                                        
                                       
                                        height: 100%;
                                        background-color: #BA181B;
                                    }
                                    .prog553003{
                                            position: relative;
                                        width: 100%;
                                        height: 30px;
                                        background-color: white;
                                        border-radius: 10px;
                                        border: 1px solid #B1A7A6;
                                    }

                                        .bar553003{
                                        position: absolute;
                                        border-radius: 10px;
                                        width: <?php  echo $percent?>%;                            
                                        
                                       
                                        height: 100%;
                                        background-color: #BA181B;
                                    }
                                    .prog553442{
                                            position: relative;
                                        width: 100%;
                                        height: 30px;
                                        background-color: white;
                                        border-radius: 10px;
                                        border: 1px solid #B1A7A6;
                                    }

                                        .bar553442{
                                        position: absolute;
                                        border-radius: 10px;
                                        width: <?php echo $percent?>%;                            
                                        
                                       
                                        height: 100%;
                                        background-color: #BA181B;
                                    }
                                        </style>
                                    <?php 
                                    }
                                    ?>         
                                    <?php if (is_null($activid->getPi())) {?>
                                        <td>ffff</td>
                                    <?php 
                                    }     
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
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

    