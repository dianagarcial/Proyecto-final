<<?php
//incluye la clase Libro y CrudLibro
include("../modelo/crud_actividad.php");
require("../controlador/actividad.php");
$crud=new CrudActividad();
$activid= new Actividad();
//obtiene todos los libros con el método mostrar de la clase crud
$progDi = $crud->obtenerProgramaDirec();
$listaActividad = $crud->selectAsigna();

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

        <div class= formatorow1>
            <h1 id=titu>Registro de Actividad</h1>
            <h3 id=subtitle>Descripción detallada de la asignación de rúbricas a evaluar</h3>

        </div>

        <form action='administrar_actividades.php' method='post'>
        <table>
                <tr>
                    <td>Programa:</td>
                    <td> <input type='text' name='prog'></td>
                </tr>
                <tr>
                    <td>Director:</td>
                    <td><input type='text' name='DIREC' ></td>
                </tr>
                <tr>
                    <td>Periodo:</td>
                    <td><input type='text' name='codigoP' ></td>
                </tr>
                <tr>
                    <td>Grupo:</td>
                    <td><input type='text' name='codigoG' ></td>
                </tr>
                
                <tr>
                
                    <td>Método de calificación:</td>
                    <td><input type='text' name='medio' ></td>
                </tr>
                <tr>
                    <td>Student Outcomes:</td>
                    <td><input type='text' name='edicion' ></td>
                </tr>
                <tr>
                    <td>Perfomance Indicator:</td>
                    <td><input type='text' name='edicion' ></td>
                </tr>

                
                <input type='hidden' name='insertar' value='insertar'>
            </table>
            <input type='submit' value='Guardar'>
            <a href="index.php">Volver</a>
        </form>
        
     


</html>


   