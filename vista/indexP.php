<?php
//incluye la clase Libro y CrudLibro
include("../modelo/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud
$listaActividadPro = $crud->mostrarProEnv();
$listaActividadNEPro = $crud->mostrarProNEnv();
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
    
    <?php require "headerP.php" ?>

    <div id="contenido">
       

        <h1>Vista general de la documentación</h1>
        <h1>Actividades entregadas</h1>
        


        <div class="limiter" id="contenedor">
            <div class="container-table100" id="tablaboton">
                <div class="wrap-table100">
                    <div class="table100 ver1">


                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table id="tablaini">
                                   
                                    <tr>

                                        <th>Actividades</th>
                                        <th>Asignatura</th>
                                        <th>Grupo</th>
                                        <th>PI</th>
                                        <th>Estado</th>
                                        <th>Fecha de entrega</th>
                                        

                                    </tr>

                                
                                    </thead>

                                    <tbody id="cuerpoTabla">
                                    <?php foreach ($listaActividadPro as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></td>
				                        <td><?php echo $activid->getNomAsig() ?></td>
				                        <td><?php echo $activid->getNumGrupo() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        <td><?php echo $activid->getEstado() ?> </td>
                                        <td><?php echo $activid->getFentrega() ?> </td>
                                        
                                        <td><a id="vermas1" href="revisionprof.php?id=<?php echo $activid->getId()?>&accion=a ">Ver más</a> </td>
				
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
        

        <h1>Actividades no entregadas</h1>

        <div class="limiter" id="contenedor">
            <div class="container-table100" id="tablaboton">
                <div class="wrap-table100">
                    <div class="table100 ver1">


                        <div class="wrap-table100-nextcols js-pscroll">
                            <div class="table100-nextcols">
                                <table id="tablaini">
                                   
                                    <tr>

                                        <th>Actividades</th>
                                        <th>Asignatura</th>
                                        <th>Grupo</th>
                                        <th>PI</th>
                                        <th>Estado</th>
                                        
                                        <th>Fecha límite</th>

                                    </tr>

                                
                                    </thead>

                                    <tbody id="cuerpoTabla">
                                    <?php foreach ($listaActividadNEPro as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></td>
				                        <td><?php echo $activid->getNomAsig() ?></td>
				                        <td><?php echo $activid->getNumGrupo() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        <td><?php echo $activid->getEstado() ?> </td>
                                        
                                        <td><?php echo $activid->getFlimite() ?> </td>
                                        <td><a id="vermas1" href="inicioRegisRub.php?id=<?php echo $activid->getId()?>&accion=aN ">Ver más</a> </td>
				
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
        
        <h2>Todos los filtros</h2>
        <div class="limiter" id="contenedor">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1">
                        <table id=tablefiltro>
                                                        
                        
                                <td id="lfiltro">
                                    <img src="imagenes/PA.png"
                                    href="#"/><br><br>Filtro por <br>Periodo Académico (PA)</a></td>

                                <td id="lineafiltro"><img src="imagenes/linea.png"/></td>
    
                                <td id="lfiltro">
                                    <img src="imagenes/SO.png"
                                        href="#"/><br><br>Filtro por <br>Student Outcomes (SO)</td>
                                        <td id="lineafiltro"><img  src="imagenes/linea.png"/></td>
                                        <td id="lfiltro">
                                            <img src="imagenes/AS.png"
                                            href="#"/><br><br>Filtro por <br>Asignatura</td>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h2>Gestión documental</h2>
        <div class="limiter" id="contenedor">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1">
                    <table id=tablefiltro>
                              
                        
                            <td id="lfiltro2">
                                <img src="imagenes/recibidos.png"
                                href="#"/><br><br>Recibidos</td>
                            <td id="lineafiltro2"><img  src="imagenes/linea.png"/></td>

                            <td id="lfiltro2">
                                <img src="imagenes/revision.png"
                                    href="#"/><br><br>Revisión</td>
                            <td id="lineafiltro2"><img  src="imagenes/linea.png"/></td>
                            <td id="lfiltro2">
                                <img src="imagenes/check.png"
                                href="#"/><br><br>Aprobados</td>
                            <td id="lineafiltro2"><img  src="imagenes/linea.png"/></td>
                            <td id="lfiltro2">
                                <img src="imagenes/clear.png"
                                href="#"/><br><br>Rechazados</td>
                                            
                        
                                          
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
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



