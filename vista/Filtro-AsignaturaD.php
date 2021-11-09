<?php

include("../controlador/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();

$listarAsignatura=$crud->ConsultarAsignatura();
$listarAsignaturaEspecifica=$crud->ConsultarAsignaturaEspecifica($_GET['id']);

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
       


                <h1>Filtro por Asignatura</h1>
                <h2>Seleccionar una Asignatura</h2>

                <div class="limiter" id="contenedor">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100 ver1">
                            <table id=tablefiltro>
                                      
                                 <?php foreach ($listarAsignatura as $activid) {?>
                                <td id="lfiltro2"><a id="botonesSOfiltro" href="Filtro-AsignaturaD.php?id=<?php echo $activid->getCodAsig()?>&accion=Asignatura"> <?php echo $activid->getNomAsig() ?> </a><br><br>
                                <a style="text-decoration: none;color: #666666;" href="#">Vista Específica  </a></td>
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

                                        <th>Grupo</th>

                                        <th>Profesor</th>

                                        <th>Estado</th>

                                        <th>PI</th>

                                        <th>Fecha</th>
                                        

                                    </tr>

                                
                                    <tbody>
                                    <tbody id="cuerpoTabla">
                                    <?php foreach ($listarAsignaturaEspecifica as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></td>
				                        <td><?php echo $activid->getNomAsig() ?></td>
				                        <td><?php echo $activid->getNumGrupo() ?> </td>
                                        <td><?php echo $activid->getNomProf()." ".$activid->getApeProf() ?> </td>
                                        <td><?php echo $activid->getEstado() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        <td><?php echo $activid->getFentrega() ?> </td>
                                
                                        <td><a id="vermas1" href="RevisionDirector.php?id=<?php echo $activid->getId()?>&accion=Revi">Ver más</a> </td>
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
        <br>
        <br>
        
        <?php require "footer.php" ?>
    
   
    
      
</body>
</html>