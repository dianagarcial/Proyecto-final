<DOCTYPE html>

    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/Estilos.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <!--<script src="/controlador/login.js"> </script> eliminar -->
        <title>Login</title>
    </head>
    <body class="bg-light">

        <div class="contenedor">
            <div class="fondo-uni">
               <img src="imagenes/Fondo.png" alt="Imagen Campus"> 
            </div>
    
            <div class="loginPage">
                    <div class="form-login">
                        <img id="fondologin" alt="Logo de universidad y abet" src="imagenes/Logos.png" />
                        <h3 id="tituloLogin">Portal de gestión documental</h3>
                        <form action="../modelo/C2_login.php" method="post" id="form">
                        <div class="usuario">
                            <svg width="18" height="18" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 14C17.6834 14 20.6667 11.0167 20.6667 7.33333C20.6667 3.65 17.6834 0.666668 14 0.666668C10.3167 0.666668 7.33335 3.65 7.33335 7.33333C7.33335 11.0167 10.3167 14 14 14ZM14 17.3333C9.55002 17.3333 0.666687 19.5667 0.666687 24V27.3333H27.3334V24C27.3334 19.5667 18.45 17.3333 14 17.3333Z" fill="#B1A7A6"/>
                            </svg>
    
                            <input  id="usuario" type="text" class="form-control" placeholder="Nombre de usuario"  name="usuario" required> 
                        </div>
                        <div class="contrasena">
                            <svg width="18" height="18" viewBox="0 0 28 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 12.3333H22.3334V9.00001C22.3334 4.40001 18.6 0.666672 14 0.666672C9.40002 0.666672 5.66669 4.40001 5.66669 9.00001V12.3333H4.00002C2.16669 12.3333 0.666687 13.8333 0.666687 15.6667V32.3333C0.666687 34.1667 2.16669 35.6667 4.00002 35.6667H24C25.8334 35.6667 27.3334 34.1667 27.3334 32.3333V15.6667C27.3334 13.8333 25.8334 12.3333 24 12.3333ZM14 27.3333C12.1667 27.3333 10.6667 25.8333 10.6667 24C10.6667 22.1667 12.1667 20.6667 14 20.6667C15.8334 20.6667 17.3334 22.1667 17.3334 24C17.3334 25.8333 15.8334 27.3333 14 27.3333ZM19.1667 12.3333H8.83335V9.00001C8.83335 6.15001 11.15 3.83334 14 3.83334C16.85 3.83334 19.1667 6.15001 19.1667 9.00001V12.3333Z" fill="#B1A7A6"/>
                            </svg>
    
                            <input id="contrasena"type="password" class="form-control" placeholder="Contraseña"  name="clave" required>
                        </div>
                        <button id="ingresar" type="submit" class="btnLogin"  id="acceder">Ingresar</button> 
                        
                    </div>
            </div>
        </div>
    </body>
    </html>