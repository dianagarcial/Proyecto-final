<?php

include("../controlador/JP-cud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();

$activid=$crud->obtenerActividadDir($_GET['id']);

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
    

<?php require "headerD.php" ?>

<div id="contenido">
       

    <div class= formatorow1>
        <h1>Revisión de documentos</h1>

    </div>

    <div class= formatorow2>
        <div class=columna1>
            
            <div class="nd">
                <h4 id="tituloDes" >131313-1.1-1</h4></div>
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
                    <h5 class="infoletra">Docente</h5>
                    <h5 class="infoletra">Student Outcome</h5>
                    <h5 class="infoletra">Performance indicator</h5>  
                    <h5 class="infoletra">Método de calificación</h5> 
                    
                     
                           
                </div>
                <div class=columinfo2>
                   
                    
                        <h5 class="infoletraw" id=programaRD><?php echo $activid-> getNomProgAcademico()?></h5>
                        <h5 class="infoletraw" id=asignaturaRD><?php echo $activid-> getNomAsig()?></h5> 
                        <h5 class="infoletraw" id=grupoRD><?php echo $activid-> getNumGrupo()?></h5> 
                        <h5 class="infoletraw" id=periodoRD><?php echo $activid-> getPeriodo()?></h5>  
                        <h5 class="infoletraw" id=docenteRD><?php echo $activid-> getNomProf()." ".$activid-> getApeProf()?></h5> 
                        <h5 class="infoletraw" id=soRD><?php echo $activid-> getSo() ?></h5> 
                        <h5 class="infoletraw" id=piRD><?php echo $activid-> getPi() ?></h5>
                        <h5 class="infoletraw" id=metCali><?php echo $activid-> getMedioEv() ?></h5>
                    
                               
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

             <label id="labelestado">Estado* </label>
             <label id="labelestado">Comentarios </label>
                </div>
               <form action='../controlador/JP-administrar_actividad.php'<?php echo $activid-> getId()?> method='POST'>
               <input type="hidden" name="id" value=<?php echo $activid-> getId()?>>
               
                <div class="estado2">
                            <select id="selectEstado" name="calif" >
                            <option value='' hidden><?php echo $activid->getCalirubrica()?></option>    
                                <option value="Aprobado">Aprobado</option>
                                <option value="Rechazado">Rechazado</option>                           
                        </select>
                
                <textarea class=estilotextarea2 cols="60" rows="8" name="comentario"><?php echo $activid->getCalicommentrubrica()?></textarea>

                <input type='hidden' name='actualizar' value='actualizar'>
	
	            <input type='submit' class="enviarRevision" value='Guardar'>

                
            </div>
        
            



        </div>
        
        <div class=formatorow4>
            <button class="cancelar" id="cancelarRevi" onclick="window.location.href='indexD.php'">Cancelar</button>

            <button class="enviarRevision" href="indexD.php?id=<?php echo $activid->getId()?>&accion=ar">Enviar revisión</button>
            
        </div>
        </form>
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


   