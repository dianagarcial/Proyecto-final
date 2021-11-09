<?php
//incluye la clase Libro y CrudLibro
include("../controlador/Marin-crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud
$activid=$crud->obtenerActividadEvi($_GET['id']);

//$activid=$crud->ConsultarRegistrar($_GET['id']);

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
            <h1 id=titu>Subir evidencias de CALIDAD ALTA</h1>
            <h3 id=subtitle>En este espacio se suben la evidencias de la rúbricas</h3>

        </div>
        <form action='../controlador/administrar_actividad.php' method='POST'>
        <table>
        <div class= formatorow2>
                    <input type="hidden" name="codRub" value=<?php echo $activid-> getCodrubrica()?>></input>
                    <input type="hidden" name="nombre" value= <?php echo 'EA'.$activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?>></input>
                    <?php $now = date ('Y-m-d');?>
                                  
                    <div class=columinfo1>
                        <h5 id="infoletra">Rúbrica asociada</h5>
                        <label class="labelestado" id="nomdoc" name="nomRub">Rub <?php echo $activid->getCodAsig()."-".$activid->getPi()."-".$activid->getNumGrupo() ?><label> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Calidad de trabajo</h5>
                        <label class="labelestado" id="nomdoc" name="nivel">Alta<label> 
                         
                        
                    </div>
                    <div class=columinfo1>
                        <h5 id="infoletra">Comentarios</h5> 
                        <textarea class="inputestado" id="coment" name="comentario"placeholder="Escribe los comentarios que desees agregar..."></textarea>
                    </div>
                
                    

                    
                    <div class=columinfo1>
                        
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                        

                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' name="arcRALTA"onchange="readURL(this);" />
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
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adjuntar archivo</button>
                        </div>
                        
                               
                    </div>
                    
                
                    </div>
                </div>
                <input type='hidden' name='insertarE' value='insertarE'>
           
           </table>
           <input type='submit' value='Guardar'>
           <a href="index.php">Volver</a>
       </form>

            </div>

        
            



        </div>
        <div class=formatorow4>
            <button class="cancelar"onclick="window.location.href='/vista/subirRubr.html'">Cancelar</button>

            <button class="enviarRevision" onclick="window.location.href='/vista/subirEvid-media.html'">Siguiente ></button>
            
        </div>

    </div>
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


   