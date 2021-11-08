<?php
//incluye la clase Libro y CrudLibro
require_once('../modelo/crud_actividad.php');
require_once('actividad.php');

$crud= new CrudActividad();
$lactividad= new Actividad();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		
		$lactividad->setMedioEv($_POST['medio']);
		$lactividad->setGrupo($_POST['codigoG']);
		$lactividad->setPeriodo($_POST['codigoP']);
		$lactividad->setPi($_POST['edicion']);
		
		//llama a la función insertar definida en el crud
		$crud->insertar($lactividad);
		
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['asi'])) {
		
		$lactividad-> getNomAsig($_POST['asiginsertar']);
		
		//llama a la función insertar definida en el crud
		$crud->busqGrupo($lactividad);
		$crud->contarGrupo($lactividad);
		
	}elseif(isset($_POST['insertarRub'])) {
		
			$lactividad->setid($_POST['codAct']);
			$lactividad->setNomrubrica($_POST['nombre']);
			$lactividad->setFentrega($_POST['fecha']);
			$lactividad->setComenrubrica($_POST['comentarioen']);
			
			//llama a la función insertar definida en el crud
			$crud->insertarRub($lactividad);
			
			header('Location: index.php');
	}
	elseif(isset($_POST['actualizar'])){
		//$libro->setId($_POST['id']);
		//$libro->setNombre($_POST['nombre']);
		//$libro->setAutor($_POST['autor']);
		//$libro->setAnio_edicion($_POST['edicion']);
		//$crud->actualizar($libro);
		//header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		//$crud->eliminar($_GET['id']);
		//header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: revisionprof.php');
	}elseif($_GET['accion']=='aN'){
		header('Location: inicioRegisRub.php');
	}elseif($_GET['accion']=='aD'){
		header('Location: consulActividad.php');
	
}elseif($_GET['accion']=='ar'){
	header('Location: registrarRUB.php');
	
}

	
?>
