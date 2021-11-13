<?php

include("../controlador/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();


$listaActividadDir=$crud->ConsultarEntregado();

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
    
    <?php require "headerD.php" ?>
            
    
    
    <div id="contenido">
       
  

        <h1 class="MasGrande">Documentos Recibidos</h1>


        <div class="limiter" id="contenedor">
            <div class="container-table100" id="tablaboton">
                <div class="wrap-table100">
                    <div class="table100 ver1">


                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table id="tablaini">
                                   <thead>
                                    <tr>
                                      
                                      
                                        <th>Documento</th>
                                        <th>Asignatura</th>
                                        <th>Grupo</th>
                                        <th>Docente</th>
                                        <th>PI</th>
                                        <th>Fecha entrega</th>


                                    </tr>
                                </thead>

                                    <tbody id="cuerpoTabla">
                                    <?php foreach ($listaActividadDir as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></td>
				                        <td><?php echo $activid->getNomAsig() ?></td>
				                        <td><?php echo $activid->getNumGrupo() ?> </td>
                                        <td><?php echo $activid->getNomProf()." ".$activid->getApeProf() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        <td><?php echo $activid->getFentrega() ?> </td>
                                        <td><a id="vermas1" href="revisionDirector.php?id=<?php echo $activid->getId()?>&accion=aprobadoF ">Ver más</a> </td>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                     <?php if (is_null($activid->getId())) {?>
                                        <td colspan="7">No se han recibido actividades actualmente</td>
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
        </div>

        
                    </div>
                </div>
            </div>
        </div>
        <br>


        
    <br>
    <br>

    <a href="#" class="btn-flotante"></a>



    <?php require "footer.php" ?>
    
     

</body>
</html>
