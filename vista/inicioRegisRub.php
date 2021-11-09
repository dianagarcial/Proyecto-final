<?php
//incluye la clase Libro y CrudLibro
include("../controlador/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud
$activid=$crud->obtenerIngrActividad($_GET['id']);
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
    <script src="/controlador/funcionarchivo.js"></script>

    <?php require "headerP.php" ?>
<div id="contenido">
       

        <div class= formatorow1>
            <h1 id=titu>Revisión de Actividad</h1>
            <h3 id=subtitle>Descripción detallada de la asignación de rúbricas a evaluar</h3>

        </div>

        <div class= formatorow2>
            
                                   
                    <div class=columinfo1>
                        <h5 id="infoletra">Programa</h5>
                        <h5 class="infoletraRe" id=programaRA><?php echo $activid-> getNomProgAcademico()?></h5> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Asignatura</h5> 
                        <h5 class="infoletraRe" id=AsignaturaRA><?php echo $activid-> getNomAsig()?></h5> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Grupo</h5> 
                        <h5 class="infoletraRe" id=periodoRA><?php echo $activid-> getNumGrupo()?></h5> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Periodo</h5> 
                        <h5 class="infoletraRe" id=periodoRA><?php echo $activid-> getPeriodo()?></h5> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Director</h5> 
                        <h5 class="infoletraRe" id=periodoRA><?php echo $activid-> getNomProf()." ".$activid-> getApeProf()?> </h5> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Student Outcome</h5> 
                        <h5 class="infoletraRe" id=SORA>SO <?php echo $activid-> getSo()?></h5> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Performance indicators</h5> 
                        <h5 class="infoletraRe" id=PIRA>PI <?php echo $activid-> getPi()?></h5>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Método de calificación</h5> 
                        <h5 class="infoletraRe" id=MCRA><?php echo $activid-> getMedioEv()?></h5>
                    </div>
                    
                    
                </div>

            </div>

        
            



        </div>
        <div class=formatorow4>
        <button class="cancelar"  onclick="window.location.href='indexP.php'">Cancelar</button>

        <button class="enviarRevision"> <a id="vermas1"  href="registrarRUB.php?id=<?php echo $activid->getId()?>&accion=ar ">Registrar</a></button>
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


   