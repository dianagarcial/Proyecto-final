<?php
//incluye la clase Libro y CrudLibro
require_once('../modelo/JP-cud_actividad.php');
require_once('actividad.php');

$crud= new CrudActividad();
$lactividad= new Actividad();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		//$libro->setNombre($_POST['nombre']);
		//$libro->setAutor($_POST['autor']);
		//$libro->setAnio_edicion($_POST['edicion']);
		//llama a la función insertar definida en el crud
		//$crud->insertar($libro);
		//header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){

		$lactividad->setId($_POST['id']);
		$lactividad->setCalirubrica($_POST['calif']);
		$lactividad->setCalicommentrubrica($_POST['comentario']);
		//$lactividad->setAnio_edicion($_POST['edicion']);
		$crud->actualizar($lactividad);
		header('Location: ../vista/indexD.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		//$crud->eliminar($_GET['id']);
		//header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}

	
?>
