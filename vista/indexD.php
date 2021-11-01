

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

                        <li><a href="registroactfut.php">Registro Actividades</a></li>
                </ul>
                </div>
            
            
    
    
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
                                    <?php 
                                    include("../controlador/index.php");
                                    
                                    
                                    while($mostrar=mysqli_fetch_array($result)){ 
                                        ?>
                                        
                                    
                                    <tr>
                                    
                                        <th><?php echo $mostrar['codigoAs']."-".$mostrar['codPI']."-".$mostrar['codGru'];?></th>
                                        <th><?php echo $mostrar['asig']; ?></th>
                                        <th><?php echo $mostrar['codGru']; ?></th>
                                        <th><?php echo $mostrar['nombreP']." ".$mostrar['apellidoP']; ?></th>
                                        <th><?php echo $mostrar['estado']; ?></th>
                                        <th><?php echo $mostrar['codPI']; ?></th>
                                        <th><?php echo $mostrar['fechaen']; ?></th>
                                         <th class="cell100 column7"><a href="revisiondocente-rec.html" id="vermas1">Ver más</a></td>
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


    <footer>
        <div class="foot">
            <h3>©Ascent 2021 Grupo 5</h3>
            <h4>Para ISW1 Reto 1 2021-03</h4>
            <img id="imgfoot" alt="Imagen no disponible" src="imagenes/uaofooter.png" />
    
        </div>
    
        
    </footer>
    
     

</body>
</html>



