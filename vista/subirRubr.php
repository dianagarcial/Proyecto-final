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

</head>

<div id="imghead">
    <label for="abrir-cerrar">   
            <img id="menu" alt="Imagen no disponible" src="imagenes/menu.png" /> </label>
            <a href="#"><img id="logo" alt="Imagen no disponible" src="imagenes/Logos.png" /></a>
            <h3 id="hola" class="hola">Hola, Jose Luis</h3>
            <a href="#"><img id="notif" alt="Imagen no disponible" src="imagenes/notifications.png" /></a>
            <a href="#"><img id="perfil" alt="Imagen no disponible" src="imagenes/perfilprofe.png" /></a>
        </div>

<body>

           
    <div class="conte">
            
        <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
         
                
            
        <div id="sidebar" class="sidebar">
            <li><a href="index.html" id="portal">Portal de gestión documental</a></li>
            <ul class="menu" id="menus">
                
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#">Mis Actividades</a></li>

                <li class="submenuSO">
                    <a href="#"><span class="icon-rocket"></span>Student Outcomes(SO)<span class="caret icon-arrow-down6"></span></a>
                
                </li>
                 <li><a href="#">Asignaturas</a></li>
                <ul class="children">
                    <li><a href="#">Grupos<span class="icon-dot"></span></a></li>
                   
                </ul>


                <li class="submenuSO">
                    <a href="#"><span class="icon-rocket"></span>Gestión documental<span class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li><a href="#">Aprobado<span class="icon-dot"></span></a></li>
                        <li><a href="#">Por aprobación<span class="icon-dot"></span></a></li>
                        <li><a href="#">Rechazada<span class="icon-dot"></span></a></li>
                        <li><a href="#">Sin enviar<span class="icon-dot"></span></a></li>

                    </ul>
               
      
            </ul>
            </div>
        
        


<div id="contenido">
       

        
        

     
    

    
        <div class= formatorow1>
            <h1 id=titu>Subir rúbricas diligenciadas</h1>
            <h3 id=subtitle>En este espacio se suben las rúbricas previamente diligenciadas</h3>

        </div>

        <div class= formatorow2>
            
                                   
                    <div class=columinfo1>
                        <h5 id="infoletra">*Nombre del documento</h5>
                        <label class="labelestado" id="nomdoc">Rub 131313-1.1-1<label> 
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Asignatura</h5> 
                        <label class="labelestado" id="asignatu">Elementos Biomédicos</label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Grupo</h5> 
                        <label class="labelestado" id="periodo">1</label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Periodo</h5> 
                        <label class="labelestado" id="periodo">2021-03</label>
                    </div>

                    

                    

                    <div class=columinfo1>
                        <h5 id="infoletra">*Student Outcomes</h5> 
                        <label class="labelestado" id="sot">1</label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">*Performance indicators</h5> 
                        <label class="labelestado" id="pi">1.1</label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Método de calificación</h5> 
                        <label class="labelestado" id="actasociada">Parcial corte 1</label>
                    </div>

                    <div class=columinfo1>
                        <h5 id="infoletra">Comentarios</h5> 
                        <textarea class="inputestado" id="coment"placeholder="Escribe los comentarios que desees agregar..."></textarea>
                    </div>
                    
                    <div class=columinfo1>
                        
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                        

                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" onchange="readURL(this);" />
                            <div class="drag-text">
                                <img id="meu" alt="Imagen no disponible" src="imagenes/subir.png" />
                            <h3>Arrastra el archivo*</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="/imagenes/excel.png" />
                            <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adjuntar archivo</button>
                            <button class="file-upload-btn" type="button">Descargar Plantilla De Rúbrica</button>
                        </div>
                        
                               
                    </div>
                    
                
                    </div>
                </div>

            </div>

        
            



        </div>
        <div class=formatorow4>
            <button class="cancelar" onclick="window.location.href='/vista/revisionactividad.html'">Cancelar</button>
            <button class="enviarRevision" onclick="window.location.href='/vista/subirEvid-alta.html'">Siguiente > </button>
            
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


   