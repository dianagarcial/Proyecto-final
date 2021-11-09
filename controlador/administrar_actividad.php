<?php

require_once('../modelo/crud_actividad.php');
require_once('actividad.php');

$crud= new CrudActividad();
$lactividad= new Actividad();


	if (isset($_POST['insertar'])) {
		
		$lactividad->setMedioEv(htmlentities($_POST['medio']));
		$lactividad->setGrupo($_POST['codigoG']);
		$lactividad->setPeriodo($_POST['codigoP']);
		$lactividad->setPi($_POST['edicion']);
		
		
		$crud->insertar($lactividad);
		
		header('Location: index.php');
	
	}elseif (isset($_POST['insertarAct'])) {
		
		$lactividad->setMedioEv($_POST['metodoInsertar']);
		$lactividad->setGrupo($_POST['grupo']);
		$lactividad->setPeriodo('2021-03');
		$lactividad->setPi($_POST['PI']);
		$crud->insertar($lactividad);
		
		header('Location: ../vista/consulRegAsig.php');
	
	}elseif(isset($_POST['asi'])) {
		
		$lactividad-> getNomAsig($_POST['asiginsertar']);
		
		
		$crud->busqGrupo($lactividad);
		$crud->contarGrupo($lactividad);
		
	}elseif(isset($_POST['insertarRub'])) {
		
			$lactividad->setid($_POST['codAct']);
			$lactividad->setNomrubrica($_POST['nombre']);
			$lactividad->setFentrega($_POST['fecha']);
			$lactividad->setComenrubrica($_POST['comentarioen']);
			$lactividad->setComenrubrica($_POST['comentarioen']);
			
			//llama a la función insertar definida en el crud
			$crud->insertarRub($lactividad);
			$crud->actualizarCalificacionPen($lactividad);
			
			header('Location: ../vista/indexP.php');
	}elseif(isset($_POST['insertarE'])) {
		$lactividad->setCodrubrica($_POST['id']);
		$lactividad->setNomrubrica($_POST['nomRub']);
		$lactividad->setFentrega($_POST['nivel']);
		$lactividad->setComenrubrica($_POST['comentario']);
		
		//llama a la función insertar definida en el crud
		$crud->insertarEvid($lactividad);
		
		header('Location: subirEvid.php');

	
	}elseif($_GET['accion']=='a'){
		header('Location: revisionprof.php');
	}elseif($_GET['accion']=='aN'){
		header('Location: inicioRegisRub.php');
	}elseif($_GET['accion']=='aD'){
		header('Location: consulActividad.php');
	
}elseif($_GET['accion']=='ar'){
	header('Location: registrarRUB.php');
	
}elseif($_GET['accion']=='evi'){
	header('Location: subirEvid.php');

}
	
?>
