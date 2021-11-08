<?php
//incluye la clase Libro y CrudLibro
include("../modelo/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud


$listarSoEspecifico=$crud->ConsultarSoEspecifico($_GET['id']);
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
                                <td id="lfiltro2"><a id="botonesSOfiltro" href="filtro-SOD.php?id=<?php echo $activid->getSo()?>&accion=SO">SO<?php echo $activid->getSo() ?> </a><br><br>
                                <a style="text-decoration: none;color: #666666;" href=" so-Especifico.php?id=<?php echo $activid->getSO()?>&accion=Se">Vista Específica  </a></td>
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
                                    <?php foreach ($listarSoEspecifico as $activid) {?>
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