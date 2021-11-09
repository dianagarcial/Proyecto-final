<?php

include("../controlador/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();

$listaActividadGen = $crud->mostraract();
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
        <h1 class="titulov">Revisión de actividades registradas</h1>
        <div class="ti">
            <div class="ti1">
                <h1 class="subv">Actividades registradas</h1>
                <a href="registroactividad.php?asi=1" class="regis">¡Registrar aqui!</a>
            </div>
            
            
            
        </div>
       

        
        <div class="limiter" id="contenedor">
            <div class="container-table100" id="tablaboton">
                <div class="wrap-table100">
                    <div class="table100 ver1">


                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table id="tablaini">
                                   
                                    <tr>

                                        <th>Asignatura</th>

                                        <th>Docente</th>

                                        <th>Grupo</th>

                                        <th>PI asocido</th>

                                        <th>SO asociado</th>
                                        <th>Editar</th>

                                        

                                    </tr>

                                
                                    <tbody>
                                    <?php foreach ($listaActividadGen as $activid) {?>
		                        	<tr>
                                        
				                        <td><?php echo $activid->getNomAsig() ?></td>
				                        <td><?php echo $activid->getNomProf()." ".$activid->getApeProf() ?> </td>
                                        <td><?php echo $activid->getGrupo() ?> </td>
                                        <td><?php echo $activid->getSo() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        
                                        
                                        <td class="cell100 column5"><a id="vermas1"> Editar </a></td>
                                    </tr>
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
        <br>
        

    <a href="#" class="btn-flotante"></a>


     
    <footer>
        <div class="foot">
            <h3>©Ascent 2021 Grupo 5</h3>
            <h4>Para ISW1 Reto 1 2021-03</h4>
            <img id="imgfoot" alt="Imagen no disponible" src="imagenes/uaofooter.png" />

        </div>

    </footer>
    

   
   

</body>
</html>



