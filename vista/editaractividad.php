<?php


include("../controlador/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();

$activid=$crud->mostraractIn($_GET['id']);
$listarSO=$crud->ConsultarSO('1');

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
    <script src="/controlador/registroact.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>

</head>

<?php require "headerD.php" ?>
<div id="contenido">
       

        
        

     
    

    
        <div class= formatorow1>
            <h1 id=titu>Registro de Actividad</h1>
            <h3 id=subtitle>Descripción detallada de la asignación de rúbricas a evaluar</h3>

        </div>

        <form action='../controlador/administrar_actividad.php' method='post'>
        <div class= formatorow2>
            
                    
                    <div class=columinfo1>
                        <h5 id="infoletra">Programa</h5>
             
                        
                                                      
                        <label class='labelestado' name='programaInsertar'><?php echo $activid-> getNomProgAcademico()?></label>
                                                    
                        

                       
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Director</h5> 
                        
       
                                                      
                        <label class='labelestado' name='directorInsertar'><?php echo $activid->getNomDi()." ".$activid->getApeDi()?></label>
                                                    
                        
                  

                 
                    </div>
                        

                    <div class=columinfo1>
                    
                        <h5 id="infoletra">Periodo</h5> 
                        <input class="labelestado" name="periodo" type='text' value="2021-3 " disabled><?php echo $activid-> getPeriodo()?></input>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Asignatura</h5> 
                        <select class="labelestado" id="asignatu" name="grupo">

                                             	
				        		                      
                        <option value= <?php echo $activid->getGrupo()?>><?php echo $activid->getNomAsig()."-".$activid->getNumGrupo()?></option>
                            
                      
                            
                        </select>
                    </div>
                        
                    <input  type='hidden'name='asi' value='asi'>
                    
                   

                    <div class=columinfo1>
                        <h5 id="infoletra">*Método de calificación</h5> 
                        <input  class="labelestado" name='metodoInsertar' placeholder=<?php echo $activid->getMedioEv()?>></input>
                    </div>

                    <div class="columinfo1">
                        
                        <h5 id="infoletra">*Student Outcomes</h5> 
                            <select class="labelestado" id= "SOs0" name="SO">
                            <option value='' hidden> <?php echo $activid->getGrupo()?>SO <?php echo $activid->getPi()."-".$activid->getNomSo()?></option> 
                            <?php foreach ($listarSO as $activid) {?>
		                        	
                                  
                                    <option value= <?php echo $activid->getGrupo()?>>SO <?php echo $activid->getSo()."-".$activid->getNomSo()?></option>
                            <?php
                             }?>            
                                   
                            </select>
                        </div> 
                        
                        <div class="columinfo1">
                            <h5 id="infoletra">*Perfomance Indicator</h5> 
                            <select class="labelestado" id="PIs0" name= "PI">
                            <option value='<?php echo $activid->getSo()?>' hidden> </option> 
                                <option value=''> </option>
                            </select>
                        </div>

                        
                </div>

            </div>

        


        </div>
        <input type='hidden' name='insertarAct' value='insertarAct'>
            <input type='submit' value='Guardar'>
     
        

    </div>
    </form>
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
  
        <script>

 cambiarSelect();

function cambiarSelect(){
    for (let index = 0; index < 7; index++) {
    console.log(index)
    var select = document.getElementById("SOs"+index);
    select.addEventListener('change', 
    function (){
        var SOselect = document.getElementById("SOs"+ index).selectedIndex;
        console.log(SOselect);

        switch (SOselect) {
            case 1:
                document.getElementById("PIs"+ index).innerHTML = "<option value='1.1'>1.1 Identifica y formula problemas complejos de ingeniería.</option>" + "<option value='1.2'>1.2 Resuelve problemas complejos de ingeniería aplicando principios de ingeniería, ciencias y matemáticas.</option>";
                break;

            case 2:
                document.getElementById("PIs"+ index).innerHTML = "<option value='2.1'>2.1 Aplica un proceso estructurado de diseño en ingeniería para producir alternativas de solución que satisfagan las necesidades de las personas y consideren los atributos de diseño.</option>" + "<option value='1.2'>2.2 Considera en el proceso de diseño en ingeniería aspectos tales como la salud pública, seguridad, bienestar, así como factores globales, culturales, sociales y económicos, entre otros.</option>";
                break;

            case 3:
                document.getElementById("PIs"+ index).innerHTML = "<option value='3.1'>3.1 Produce documentos con una estructura, gramática y claridad apropiadas, para diferentes audiencias.</option>" + "<option value='3.2 '>3.2 Hace presentaciones orales usando una estructura, lenguaje, fluidez y estilo apropiados.</option>";
            break;

            case 4:
                document.getElementById("PIs"+ index).innerHTML = "<option value='4.1'>4.1 reconoce su responsabilidad ética y profesional tanto en las soluciones de ingeniería como en su desarrollo personal y profesional.</option>" + "<option value='4.2'>4.2 considera el impacto de las soluciones de ingeniería en el contexto global, económico, ambiental y social.</option>";
            break;

            case 5:
                document.getElementById("PIs"+ index).innerHTML = "<option value='5.1'>5.1 Participan en el fortalecimiento del equipo de trabajo aportando ideas y respetando las opiniones de los otros miembros.</option>" + "<option value='5.2'>5.2 Gestionan las actividades al interior del equipo de trabajo para abordar un proyecto.</option>";
            break;

            case 6:
                document.getElementById("PIs"+ index).innerHTML = "<option value='6.1'>6.1 Gestionan las actividades al interior del equipo de trabajo para abordar un proyecto.</option>" + "<option value='6.2'>6.2 Analizar e interpretar datos con el fin de obtener conclusiones adecuadas</option>";
            break;

            case 7:
                document.getElementById("PIs"+ index).innerHTML = "<option value='7.1'>7.1 Realiza búsquedas de información y emplea adecuadamente la información consultada.</option>" + "<option value='7.2'>7.2</option>";
            break;

            default:
                document.getElementById("PIs"+ index).innerHTML = "";
                break;
        }
});
    
}
}

//intento de grupos



        </script>
      




</body>
</html>


   