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
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    

</head>
<?php require "headerD.php" ?>

<div id="contenido">
      
        <div class= formatorow1>
            <h1 id=titu>Registro de Actividad</h1>
            <h3 id=subtitle>Descripción detallada de la asignación de rúbricas a evaluar</h3>

        </div>

        <div class= formatorow2>
            
                                   
                    <div class=columinfo1>
                        <h5 id="infoletra">Programa</h5>
                        <?php foreach($result1 as $ncarrera){          
                            echo "<label class='labelestado' name='programa' >".$ncarrera["prog"]."</label>";
                        }?>

                       
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Asignatura</h5> 
                        
                        <select class="labelestado" id="asignatu" name="asignatura">
                        <?php while($mostrar=mysqli_fetch_array($result2)){  ?> 
                            <option value="bioelem"><?php echo $mostrar['asig']; ?></option>
                        <?php
                        }
                        ?>    
                        </select>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Periodo</h5> 
                        <label class="labelestado" id="periodo" name="periodo">2022-1</label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Director</h5> 
                        <?php foreach($result3 as $ndirector){          
                            echo "<label class='labelestado' name='director'>".$ndirector["nombre"]." ".$ndirector["apellido"]."</label>";
                        }?>
                    

                    
                        </select>

                        
                    </div>
                    <div class=columinfo1>
                        <h5 id="infoletra">*Método de calificación</h5> 
                        <input  class="labelestado" name="metodo" > </input>
                    </div>

                    <div class="columinfo1">
                        
                        <h5 id="infoletra">*Student Outcomes</h5> 
                            <select class="labelestado" id= "SOs0" name="SO1">
                                <option value=''> </option>
                                <option value='RAE-1'>SO-1: Problemas complejos de ingeniería</option>
                                <option value='RAE-2'>SO-2: Diseño en Ingeniería</option>
                                <option value='RAE-3'>SO-3: Comunicación Efectiva</option>
                                <option value='RAE-4'>SO-4: Responsabilidades éticas y profesionales</option>
                                <option value='RAE-5'>SO-5: Trabajo en equipo</option>
                                <option value='RAE-6'>SO-6: Experimentación</option>
                                <option value='RAE-7'>SO-7: Autoaprendizaje</option>
                            </select>
                        </div> 
                        
                        <div class="columinfo1">
                            <h5 id="infoletra">*Perfomance Indicator</h5> 
                            <select class="labelestado" id="PIs0" name= "PI1">
                                <option value=''>                                  
                               </option>
                            </select>


                            
                        </div>

                        <div class="columinfo1">
                        
                            <h5 id="infoletra">Student Outcomes</h5> 
                                <select class="labelestado" id= "SOs1" name="SO2">
                                    <option value=''> </option>
                                    <option value='RAE-1'>SO-1: Problemas complejos de ingeniería</option>
                                    <option value='RAE-2'>SO-2: Diseño en Ingeniería</option>
                                    <option value='RAE-3'>SO-3: Comunicación Efectiva</option>
                                    <option value='RAE-4'>SO-4: Responsabilidades éticas y profesionales</option>
                                    <option value='RAE-5'>SO-5: Trabajo en equipo</option>
                                    <option value='RAE-6'>SO-6: Experimentación</option>
                                    <option value='RAE-7'>SO-7: Autoaprendizaje</option>
                                </select>
                            </div> 
                            
                            <div class="columinfo1">
                                <h5 id="infoletra">Perfomance Indicator</h5> 
                                <select class="labelestado" id="PIs1" name= "PI2">
                                    <option value=''> </option>
                                </select>

                                
                            </div>
                    
                </div>

            </div>
            
        


        </div>
        <div class=formatorow4>
            <button class="cancelar" onclick="window.location.href='/Proyecto-final/vista/ini.php'">Cancelar</button>

            <button class="enviarRevision" onclick="window.location.href='/vista/registroactfut-c.html'">Registrar</button>
            
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
   
    <?php require "footer.php" ?>

    
    
    
  
     

      

    <script type="text/javascript" src="../controlador/selectCrearAct.js"></script>


</body>
</html>
