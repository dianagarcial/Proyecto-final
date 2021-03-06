<?php
//incluye la clase Libro y CrudLibro
include("../controlador/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud
$listaActividadDir = $crud->mostrarDirEnv();
$listaActividadNEDir= $crud->mostrarDirNEnv();
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
       

        <h1> Vista general de la documentación</h1>
        <h1>Actividades entregadas</h1>
        


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
                                        <th>Estado</th>
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
                                        <td><?php echo $activid->getEstado() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        <td><?php echo $activid->getFentrega() ?> </td>
                                        <td><a id="vermas1" href="revisionDirector.php?id=<?php echo $activid->getId()?>&accion=aD ">Calificar</a> </td>
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
                                   <thead>
                                    <tr>
                                      
                                      
                                        <th>Documento</th>
                                        <th>Asignatura</th>
                                        <th>Grupo</th>
                                        <th>Docente</th>
                                        <th>Estado</th>
                                        <th>PI</th>
                                        <th>Fecha limite</th>


                                    </tr>
                                </thead>

                                    <tbody id="cuerpoTabla">
                                    <?php foreach ($listaActividadNEDir as $activid) {?>
		                        	<tr>
                                        <td><?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></td>
				                        <td><?php echo $activid->getNomAsig() ?></td>
				                        <td><?php echo $activid->getNumGrupo() ?> </td>
                                        <td><?php echo $activid->getNomProf()." ".$activid->getApeProf() ?> </td>
                                        <td><?php echo $activid->getEstado() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        <td><?php echo $activid->getFlimite() ?> </td>
                                        <td><a id="vermas1" href="#">Notificar</a> </td>
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
                                     href="filtroperiodo.html"></img><br><br>Filtro por <br>Periodo Académico (PA)</a></td>

                                <td id="lineafiltro"><img src="imagenes/linea.png"/></td>
    
                                <td id="lfiltro">
                                    <img src="imagenes/SO.png">
                                        <a href="filtro-SOD.php?id=1&accion=SO"><br><br>Filtro por <br>Student Outcomes (SO)</a></td>
                                        <td id="lineafiltro"><img  src="imagenes/linea.png"/></td>
                                        <td id="lfiltro">
                                            <img src="imagenes/AS.png">
                                            <a href="Filtro-AsignaturaD.php?id=1&accion=Asig"> <br><br>Filtro por <br>Asignatura (AS)</a></td>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
    <br>
    <br>
    <h2>Gestión documental</h2>
        <div class="limiter" id="contenedor">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1">
                    <table id=tablefiltro>
                              
                        
                    <td id="lfiltro">
                                    <img src="imagenes/recibidos.png">
                                    <a href="consultarRecibidos.php"></img><br><br>Recibidos</td>
                           
                            <td id="lineafiltro2"><img  src="imagenes/linea.png"/></td>

                            <td id="lfiltro2">
                                <img src="imagenes/revision.png">
                                <a  href="consultarnoRecibidos.php"><br><br>Pendiente</td></a>
                            <td id="lineafiltro2"><img  src="imagenes/linea.png"/></td>
                            <td id="lfiltro2">
                                <img src="imagenes/check.png">
                                <a  href="consultarAprobado.php"><br><br>Aprobados</td></a>
                            <td id="lineafiltro2"><img  src="imagenes/linea.png"/></td>
                            <td id="lfiltro2">
                                <img src="imagenes/clear.png">
                                <a href="consultarRechazado.php"><br><br>Rechazados</td></a>
                                            
                        
                                          
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <a href="#" class="btn-flotante"></a>


    <?php require "footer.php" ?>
    
     

</body>
</html>



