
<?php
//incluye la clase Libro y CrudLibro
include("../modelo/crud_actividad.php");
require("../controlador/actividadDir.php");
$crud=new CrudActividad();
$activid= new ActividadDir();
//obtiene todos los libros con el método mostrar de la clase crud
$listaActividadDir = $crud->mostrar();
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
       

        <h1>Vista general de la documentación</h1>
        


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
                                        <td><?php echo $activid->getCodAsig() ?></td>
				                        <td><?php echo $activid->getNomAsig() ?></td>
				                        <td><?php echo $activid->getGrupo() ?> </td>
                                        <td><?php echo $activid->getDocente() ?> </td>
                                        <td><?php echo $activid->getEstado() ?> </td>
                                        <td><?php echo $activid->getPi() ?> </td>
                                        <td><?php echo $activid->getFentrega() ?> </td>
                                        
                                        <td class="cell100 column7"><a href="revisiondocente-rec.html" id="vermas1">Ver más</a></td>
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
                                    href="#"/><br><br>Pendiente</td>
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



    <?php require "footer.php" ?>
    
     

</body>
</html>



