<?php

include("../controlador/JP-cud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();

$listaAsignatura = $crud->mostrarASIG($_GET['asig']);
$asi=$crud->mostrarA($_GET['asig']);

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

  
		                        	                                   
    <h1><?php echo $asi->getNomAsig() ?></h1>

   
        


        <div class="limiter" id="contenedor">
            <div class="container-table100" id="tablaboton">
                <div class="wrap-table100">
                    <div class="table100 ver1">


                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table id="tablaini">
                                   
                                    <tr>

                                        <th>Actividad</th>
                                        <th>Grupo</th>
                                        <th>Fecha entrega</th>
                                        <th>Estado</th>
                                        
                                         

                                    </tr>

                                
                                    <tbody>
                                    <?php foreach ($listaAsignatura as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></td>
                                        <td><?php echo $activid->getNumGrupo()?></td>
				                        <td><?php echo $activid->getFentrega() ?></td>
				                        <td><?php echo $activid->getEstado() ?> </td>
                                        <?php if($activid->getEstado()== 'Entregado'){?>
                                        <td><a id="vermas1" href="RevisionDirector.php?id=<?php echo $activid->getId()?>&accion=Revi">Ver más</a> </td>
                                        <?php 
                                    }
                                      else{?>
                                        <td><a id="vermasDES">Ver más</a> </td>
                                        <?php 
                                    }
                                }
                                     
                                    ?>    

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