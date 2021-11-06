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
    

</head>

<div id="imghead">
    <label for="abrir-cerrar">   
        <img id="menu" alt="Imagen no disponible" src="imagenes/menu.png" /> </label>
        <a href="#"><img id="logo" alt="Imagen no disponible" src="imagenes/Logos.png" /></a>
        <h3 id="hola" class="hola">Hola, Juan Carlos</h3>
        <a href="#"><img id="notif" alt="Imagen no disponible" src="imagenes/notifications.png" /></a>
        <a href="#"><img id="perfil" alt="Imagen no disponible" src="imagenes/Perfil.png" /></a>
    </div>

<body>

           
    <div class="conte">
            
        <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
         
                
            
        <div id="sidebar" class="sidebar">
            <li><a href="index.html" id="portal">Portal de gestión documental</a></li>
            <ul class="menu" id="menus">
                
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#">Periodo académico</a></li>
                <li><a href="#">Asignaturas</a></li>
                <li class="submenuSO">
                    <a href="#"><span class="icon-rocket"></span>Student Outcomes(SO)<span class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li><a href="so1.html">SO1<span class="icon-dot"></span></a></li>
                        <li><a href="so2.html">SO2 <span class="icon-dot"></span></a></li>
                        <li><a href="so3.html">SO3 <span class="icon-dot"></span></a></li>
                        <li><a href="#">SO4 <span class="icon-dot"></span></a></li>
                        <li><a href="#">SO5 <span class="icon-dot"></span></a></li>
                        <li><a href="#">SO6 <span class="icon-dot"></span></a></li>
                        <li><a href="#">SO7 <span class="icon-dot"></span></a></li>
                        
                    </ul>
                </li>
        
        
                <li class="submenuSO">
                    <a href="#"><span class="icon-rocket"></span>Gestión documental<span class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li><a href="#">Recibidos<span class="icon-dot"></span></a></li>
                        <li><a href="#">Pendientes<span class="icon-dot"></span></a></li>
                        <li><a href="#">Aprobados<span class="icon-dot"></span></a></li>
                        <li><a href="#">Rechazados<span class="icon-dot"></span></a></li>
                       
                    </ul>

                    <li><a href="registroactfut.html">Registro Actividades</a></li>
            </ul>
            </div>
        
        

        


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
            <h4 id="tituloDes">Rub 131313-1.1-1.xls</h4>
            <h4 id="tituloDes">EA 131313-1.1-1.pdf</h4>
            <h4 id="tituloDes">EM 131313-1.1-1.pdf</h4>
            <h4 id="tituloDes">EB 131313-1.1-1.pdf</h4>
            </div>

            <button id="descarga">Descargar</button>
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
                    <h5 class="infoletraw" id=programaRD>Ingeniería Biomédica</h5>
                    <h5 class="infoletraw" id=asignaturaRD>Elementos Biomédicos</h5> 
                    <h5 class="infoletraw" id=grupoRD>1</h5> 
                    <h5 class="infoletraw" id=periodoRD>2021-03</h5>
                    <h5 class="infoletraw" id=docenteRD>Jose Luis Hernandez Zambrano</h5>
                    <h5 class="infoletraw" id=soRD>SO 1</h5>
                    <h5 class="infoletraw" id=piRD>PI 1.1</h5>
                    <h5 class="infoletraw" id="actasociada">Parcial corte 1</h5>    
                    
                               
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
               
                <div class="estado2">
                            <select id="selectEstado">
                                <option value="enviado">Sin calificación</option>
                                <option value="aprobado">Aprobado</option>
                                <option value="rechazado">Rechazado</option>                           
                        </select>
                
                <input type= 'textarea' class=estilotextarea2 cols="60" rows="8" name='comentario' value='<?php echo $activid->getComentario() ?>'>
            </div>
        
            



        </div>
        <div class=formatorow4>
            <button class="cancelar" id="cancelarRevi" onclick="window.location.href='/vista/index-direc-asigna.html'">Cancelar</button>

            <button class="enviarRevision" onclick="window.location.href='/vista/index-director-a.html'">Enviar revisión</button>
            
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


   