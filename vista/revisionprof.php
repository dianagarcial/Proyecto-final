<?php
//incluye la clase Libro y CrudLibro
include("../controlador/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud
$activid=$crud->obtenerActividad($_GET['id']);
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
    <link href="css/revisiondoc.css" rel="stylesheet" />
    <link href="css/header.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <script src="/controlador/main.js"></script>
    <script type="modules" src="/controlador/mysql.js"></script>
    
    <?php require "headerP.php" ?>
    <div id="contenido">
          
        
    
        <div class= formatorow1>
            <h1>Revisión de documentos</h1>

        </div>

        <div class= formatorow2>
           
            <div class=columna1>

            
                <h4 id="tituloDes"><?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></h4>
            
                <img id="archivo" alt="Imagen no disponible" src="imagenes/folder_open.png" />
                <div id="archcar">
                <h4 id="tituloDes"><?php echo "RUB ".$activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></h4>
                <h4 id="tituloDes"><?php echo "EA ".$activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></h4>
               <h4 id="tituloDes"><?php echo "EM ".$activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></h4>
                <h4 id="tituloDes"><?php echo "EB ".$activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?></h4>
                </div>
                <a id="descarga" href="\Proyecto-final\vista\Recursos\<?php echo $activid->getArchirubrica()?>" download="<?php echo $activid->getArchirubrica()?>">Descargar </a>
            </div>

                <div class="verticalLine"></div>


            
            <div class=columna2>
                <div class="columinfoti">
                <h4 id="info">Información del documento</h4>
                </div>
                <div class=columinfo>                           
                    <div class=columinfo1>
                        <h5 class="infoletra">Programa</h5>
                        <h5 class="infoletra">Asignatura</h5>
                        <h5 class="infoletra">Grupo</h5> 
                        <h5 class="infoletra">Periodo</h5>
                        <h5 class="infoletra">Student Outcome</h5>
                        <h5 class="infoletra">Performance indicator</h5>  
                         
                               
                    </div>
                    <div class=columinfo2>
                        <h5 class="infoletraw" id=programaRD><?php echo $activid-> getNomProgAcademico()?></h5>
                        <h5 class="infoletraw" id=asignaturaRD><?php echo $activid-> getNomAsig()?></h5> 
                        <h5 class="infoletraw" id=grupoRD><?php echo $activid-> getNumGrupo()?></h5> 
                        <h5 class="infoletraw" id=periodoRD><?php echo $activid-> getPeriodo()?></h5>  
                        <h5 class="infoletraw" id=soRD><?php echo $activid-> getSo() ?></h5> 
                        <h5 class="infoletraw" id=piRD><?php echo $activid-> getPi() ?></h5>    
                        
                                   
                    </div>
                
                    </div>
                </div>

            </div>

        <div class= formatorow3>
            <div class= formatorow3>

                <h1 id="tituloRe" >Retroalimentación documentos</h1>
    
                <h5 id="infoletraw"></h5>
                <div class="estado">
                    <div class="estado1">
    
                            <label id="labelestado">Estado </label>
                            <label id="labelestado">Comentarios </label>
                               </div>
                               <div class="estado2">
                                   <label class="infoletra"id="selectEstado">
                                   <?php echo $activid-> getCalirubrica() ?>
                                                               
                                   </label>
                       
                       <textarea readonly="readonly" class=estilotextarea2 cols="60" rows="8"><?php echo $activid-> getCalicommentrubrica() ?></textarea>
                   </div>
                   
                       
           
           
           
                   </div>
                   <div class=formatorow4>
                       <button class="cancelar" ID ="RegresarSC" onclick="window.location.href='indexP.php'">Cancelar</button>
           
                       
                   </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>    
    <br>
    
    <footer>
        <div class="foot">
            <h3>©Ascent 2021 Grupo 5</h3>
            <h4>Para ISW1 Reto 1 2021-03</h4>
            <img id="imgfoot" alt="Imagen no disponible" src="imagenes/uaofooter.png" />

        </div>

    </footer>
    




</body>
</html>


   