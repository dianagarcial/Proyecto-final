<?php
//incluye la clase Libro y CrudLibro
require_once('crud_actividad.php');
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
	}
}elseif($_GET['accion']=='IR'){
	header('Location: RegistrarRUB.php');

}elseif($_GET['accion']=='aprobadoF'){
	header('Location: revisionDirector.php');
}elseif($_GET['accion']=='id'){
	header('Location: filtro-SOD.php?id=1&accion=SO');
}
elseif($_GET['accion']=='id'){
	header('Location: Filtro-AsignaturaD.php?id=552203&accion=Asignatura');
}elseif($_GET['accion']=='Se'){
	header('Location: so-Especifico.php');
}


	
?>
