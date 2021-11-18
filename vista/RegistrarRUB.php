<?php
//incluye la clase Libro y CrudLibro
include("../controlador/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud

$activid=$crud->ConsultarRegistrar($_GET['id']);

if (isset($_POST['insertar'])) {
    $r=$activid->getId();
    
}

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
    <link href="css/subirRubrica.css" rel="stylesheet" />
    <link href="css/header.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <script src="../controlador/funcionarchivo.js"></script>



    
</head>
<?php require "headerP.php" ?>
        


<div id="contenido">
       

        
        

     


    
        <div class= formatorow1>
            <h1 id=titu>Subir rúbricas diligenciadas</h1>
            <h3 id=subtitle>En este espacio se suben las rúbricas previamente diligenciadas</h3>

        </div>

        <div class= formatorow2>
            
        <br>
                    <div class=columinfo1>
                        <h5 id="infoletra">*Nombre del documento</h5>
                        <label class="labelestado" id="nomdoc" name="documento">Rub <?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?>
                            
                         <label> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Asignatura</h5> 
                        <label class="labelestado" id="asignatu" name="asig"> <?php echo $activid->getNomAsig() ?></label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Grupo</h5> 
                        <label class="labelestado" id="grupo" name="grupo"><?php echo $activid->getNumGrupo() ?></label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Periodo</h5> 
                        <label class="labelestado" id="periodo" name="periodo"><?php echo $activid->getPeriodo() ?></label>
                    </div>

                    

                    

                    <div class=columinfo1>
                        <h5 id="infoletra">*Student Outcomes</h5> 
                        <label class="labelestado" id="sot" name="so"><?php echo $activid->getSo() ?></label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Performance indicators</h5> 
                        <label class="labelestado" id="pi" name="pi"><?php echo $activid->getPi() ?></label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Método de calificación</h5> 
                        <label class="labelestado" id="actasociada"name="metodo"><?php echo $activid->getMedioEv() ?></label>
                    </div>


                    <form action='../controlador/administrar_actividad.php'<?php echo $activid-> getId()?> method='POST'>
                    <table>
                    <input type="hidden" name="codAct" value=<?php echo $activid-> getId()?>></input>
                    <input type="hidden" name="nombre" value= <?php echo 'Rub'.$activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?>></input>
                    <?php $now = date ('Y-m-d');?>
                    <input type="hidden" name="fecha" value= <?php echo $now ?>></input>

                    <div class=columinfo1>
                        <h5 id="infoletra">Comentarios</h5> 
                        <textarea class="inputestado" name="comentarioen" id="coment"placeholder="Escribe los comentarios que desees agregar..."></textarea>
                    </div>
                   
                    <div class=columinfo1>
                        
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                        

                        <div class="image-upload-wrap">
                            <input class="file-upload-input" name='archivo' type='file' requiered accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" onchange="readURL(this);" />
                            <div class="drag-text">
                                <img id="meu" alt="Imagen no disponible" src="imagenes/subir.png" />
                            <h3>Click aqui para adjuntar el archivo*</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="/imagenes/excel.png" />
                            <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adjuntar archivo</button><br><br>
                            <a class="plantillaDown" href="\Proyecto-final\vista\Recursos\SO<?php echo $activid->getSo()?>.xlsx" download="SO<?php echo $activid->getSo()?>.xlsx">Descargar Plantilla De Rúbrica</a>
                            <label></label>
                        </div>
                       

                        
                        
                               
                    </div>
                    </form>

                    
                
                    </div>
                </div>

            </div>
            <input type='hidden' name='insertarRub' value='insertarRub'>
           
	</table>
    <div class="botonesFinales">
	<input class="botonGuardar" type='submit' value='Guardar' >
	<a class="botonVolver" href="indexP.php">Volver </a>
    </div>
</form>
         

    </div>
    <br>
    <br>
    <br>
    <br>
   

    

    
    <?php require "footer.php" ?>
    



</body>
</html>
