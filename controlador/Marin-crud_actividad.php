<?php
// incluye la clase Db
require_once('../modelo/conexion.php');
 
	class CrudActividad{
		// constructor de la clase
		public function __construct(){}
	
		public function obtenerActividadEvi($id){
			$db=Db::conectar();
			$select=$db->prepare("SELECT ACTIVIDAD.CODIGO as id, PROGRAMAACADEMICO.nombre as prog ,ASIGNATURA.nombre as asig,GRUPO.codigo_Grup as grupo,\n"
					. "PERIODO.codigo as periodo,\n"
					. "SO.codigo as so, PI.codigo as pi, ASIGNATURA.codigo as  codAsig, RUBRICA.codigo as codRub ,RUBRICA.calificacion as caliRub,\n"
					. "RUBRICA.comentarioDir as comDir FROM ACTIVIDAD JOIN PERIODO\n"
					. "ON PERIODO.codigo=ACTIVIDAD.codPeriodo JOIN PI\n"
					. "ON PI.codigo=ACTIVIDAD.codPI JOIN SO\n"
					. "ON SO.codigo=PI.codigo_SO JOIN GRUPO\n"
					. "ON GRUPO.codigo=ACTIVIDAD.codigoGrupo JOIN ASIGNATURA\n"
					. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROGRAMAACADEMICO\n"
					. "ON PROGRAMAACADEMICO.codigo=ASIGNATURA.COD_programa JOIN PROFESOR\n"
					. "ON GRUPO.correo_pr=PROFESOR.usuario JOIN USUARIO\n"
					. "ON USUARIO.nomUsuario=PROFESOR.usuario JOIN RUBRICA\n"
					. "ON ACTIVIDAD.codigo=RUBRICA.codigo_act \n"
					. "WHERE PROFESOR.usuario='jose.luis' AND ACTIVIDAD.codigo=:id");
							
			$select->bindValue('id',$id);
			$select->execute();
			$obAct=$select->fetch();
			$myObAct= new Actividad();
			$myObAct->setId($obAct['id']);
			$myObAct->setNomProgAcademico($obAct['prog']);
			$myObAct->setNomAsig($obAct['asig']);
			$myObAct->setNumGrupo($obAct['grupo']);
			$myObAct->setPeriodo($obAct['periodo']);
			$myObAct->setSo($obAct['so']);
			$myObAct->setPi($obAct['pi']);
			$myObAct->setCodAsig($obAct['codAsig']);
			$myObAct->setCalirubrica($obAct['caliRub']);
			$myObAct->setCalicommentrubrica($obAct['comDir']);
			$myObAct->setCodrubrica($obAct['codRub']);
			

			return $myObAct;
		}


	
	public function ConsultarRegistrar($id){
		$db=Db::conectar();
		
		$select=$db->prepare("Select ACTIVIDAD.CODIGO as codigo,ASIGNATURA.codigo as codASig,SO.codigo as StudentOutcome,PI.codigo as PerformanceIndicators,\n"

		. "ASIGNATURA.nombre as nomAsignatura,GRUPO.codigo_grup as codGrupo,periodo.codigo as Periodo,\n"
	
		. "Actividad.medioevaluacion as MedioEvaluacion FROM ACTIVIDAD JOIN PERIODO\n"
	
		. "ON ACTIVIDAD.codPeriodo=Periodo.codigo JOIN PI\n"
	
		. "ON ACTIVIDAD.codPI=PI.codigo join SO\n"
	
		. "on PI.codigo_SO=SO.codigo join GRUPO\n"
	
		. "ON ACTIVIDAD.codigoGrupo=grupo.CODIGO join Asignatura\n"
	
		. "on GRUPO.codigo_asgs=ASIGNATURA.codigo join PROFESOR\n"
	
		. "on GRUPO.correo_pr=PROFESOR.usuario join USUARIO\n"
	
		. "ON PROFESOR.usuario=USUARIO.nomUSuario \n"
	
		. "where PROFESOR.usuario='jose.luis' AND ACTIVIDAD.codigo=:id;");

		$select->bindValue('id',$id);
		$select->execute();
		$obAct=$select->fetch();
		$myObAct= new Actividad();
		$myObAct->setId($obAct['codigo']);
		$myObAct->setCodAsig($obAct['codASig']);
	
		$myObAct->setNomAsig($obAct['nomAsignatura']);
		$myObAct->setNumGrupo($obAct['codGrupo']);
		$myObAct->setPeriodo($obAct['Periodo']);
		$myObAct->setSo($obAct['StudentOutcome']);
		$myObAct->setPi($obAct['PerformanceIndicators']);
		$myObAct->setMedioEv($obAct['MedioEvaluacion']);
		
			

			return $myObAct;
		}
	

	public function ConsultarAprobado(){
		$db=Db::conectar();
		$listaActividadGen=[];
		$select=$db->query("SELECT ACTIVIDAD.CODIGO as codigo,GRUPO.codigo as codigoGrupo,GRUPO.codigo_Grup numGru,ASIGNATURA.codigo as codAsig, ASIGNATURA.nombre as Asignatura,(SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as ProfesorNomb,\n"

		. "(SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as ProfesorApellido, \n"
	
		. "ACTIVIDAD.fechaEntrega as FechaEntrega,SO.codigo as So,PI.codigo as Pi,RUBRICA.nombre as nombreDOC,RUBRICA.calificacion as Calificacion,ACTIVIDAD.codigo as CODact FROM ACTIVIDAD JOIN PERIODO\n"
	
		. "ON ACTIVIDAD.codPeriodo=Periodo.codigo JOIN PI\n"
	
		. "ON ACTIVIDAD.codPI=PI.codigo join SO\n"
	
		. "on PI.codigo_SO=SO.codigo join GRUPO\n"
	
		. "ON ACTIVIDAD.codigoGrupo=grupo.CODIGO join Asignatura\n"
	
		. "on GRUPO.codigo_asgs=ASIGNATURA.codigo join RUBRICA\n"
	
		. "on ACTIVIDAD.codigo=RUBRICA.codigo_act join PROFESOR\n"
	
		. "on GRUPO.correo_pr=PROFESOR.usuario join USUARIO\n"
	
		. "ON PROFESOR.usuario=USUARIO.nomUSuario\n"
	
		. "\n"
	
		. "WHERE RUBRICA.calificacion='Aprobado';");

	foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setId($AD['codigo']);
				$myAD->setNomAsig($AD['Asignatura']);
				$myAD->setCodAsig($AD['codAsig']);
				$myAD->setNumGrupo($AD['numGru']);
				$myAD->setNomProf($AD['ProfesorNomb']);
				$myAD->setApeProf($AD['ProfesorApellido']);
				$myAD->setFentrega($AD['FechaEntrega']);
				$myAD->setGrupo($AD['codigoGrupo']);
				$myAD->setSo($AD['So']);
				$myAD->setPi($AD['Pi']);
				$listaActividadGen[]=$myAD;
			}

			return $listaActividadGen;
		}


		public function ConsultarSO(){
			$db=Db::conectar();
			$listaSO=[];
			$select=$db->query("SELECT codigo as So , nombre nom from so;");

			foreach($select->fetchAll() as $AD){
			$myAD= new Actividad();
			$myAD->setSo($AD['So']);
			$myAD->setNomSo($AD['nom']);
			$listaSO[]=$myAD;
		}

		return $listaSO;
	}

	public function ConsultarSoEspecifico($id){
		$db=Db::conectar();
		$listaSoE=[];
		$select=$db->prepare("SELECT pi.codigo_SO as id, so.NOMBRE as nom,ACTIVIDAD.CODIGO as codigo,ASIGNATURA.nombre as asig,ASIGNATURA.codigo as codAsig,\n"

    . "(SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as nombreP,\n"

    . "(SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as apellidoP,IFNULL(ACTIVIDAD.fechaEntrega,'-') as fechaen,\n"

    . "GRUPO.codigo_grup as codGru,PI.codigo as picoD,IFNULL(actividad.estado,'No Entregado') as estado FROM USUARIO JOIN DIRECTORPROGRAMA\n"

    . "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN PROGRAMAACADEMICO\n"

    . "ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA\n"

    . "ON ASIGNATURA.cod_programa= PROGRAMAACADEMICO.codigo JOIN GRUPO\n"

    . "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN ACTIVIDAD\n"

    . "ON ACTIVIDAD.codigoGrupo=GRUPO.codigo JOIN PI\n"

    . "ON ACTIVIDAD.codPi=PI.codigo JOIN SO ON SO.codigo=pi.codigo_SO \n"

    . "WHERE pi.codigo_SO=:id;");

		$select->bindValue('id',$id);
		$select->execute();
	
	foreach($select->fetchAll() as $obAct){
		$myAD= new Actividad();
		$myAD->setSO($obAct['id']);
		$myAD->setNomSO($obAct['nom']);
		$myAD->setid($obAct['codigo']);
		$myAD->setCodAsig($obAct['codAsig']);
		$myAD->setNomProf($obAct['nombreP']);
		$myAD->setApeProf($obAct['apellidoP']);
		$myAD->setFentrega($obAct['fechaen']);
		$myAD->setNumGrupo($obAct['codGru']);
		$myAD->setNomAsig($obAct['asig']);
		$myAD->setEstado($obAct['estado']);
		$myAD->setPi($obAct['picoD']);
		
		$listaSoE[]=$myAD;
	}

	return $listaSoE;

	}

	public function ConsultarSoE($id){
		$db=Db::conectar();
		$listaSoE=[];
		$select=$db->prepare("SELECT PI.codigo as codpi,MAX(actividad.fechaEntrega) as ultmodi, COUNT(*) as Total, COUNT(ACTIVIDAD.fechaEntrega) as entregadas,\n"

		. "(SELECT COUNT(*) FROM RUBRICA WHERE rubrica.calificacion='Aprobado') as aprobada, \n"
	
		. "(SELECT COUNT(*) FROM RUBRICA WHERE rubrica.calificacion='Rechazado') as rechazado FROM SO JOIN PI \n"
	
		. "ON PI.codigo_SO=SO.codigo JOIN ACTIVIDAD ON actividad.codPi=pi.codigo  \n"
	
		. "WHERE SO.codigo=:id GROUP BY PI.codigo;");
 
		$select->bindValue('id',$id);
		$select->execute();
	
	foreach($select->fetchAll() as $obAct){
		$myAD= new Actividad();
		$myAD->setPi($obAct['codpi']);
		$myAD->setFentrega($obAct['ultmodi']);
		$myAD->setAprobada($obAct['entregadas']);
		$myAD->setRechazada($obAct['rechazado']);
		$myAD->setTotal($obAct['Total']);
		
		
		$listaSoE[]=$myAD;
	}

	return $listaSoE;

	}


	public function ConsultarSoEspecificoSOLO($id){
		$db=Db::conectar();
		$listaSoE=[];
		$select=$db->prepare("SELECT *  FROM `so` WHERE `codigo`=:id");

		$select->bindValue('id',$id);
		$select->execute();
	
	foreach($select->fetchAll() as $obAct){
		$myAD= new Actividad();
		$myAD->setSO($obAct['codigo']);
		$myAD->setNomSO($obAct['nombre']);
		$myAD->setDescSo($obAct['descripcion']);
		
		
		$listaSoE[]=$myAD;
	}

	return $listaSoE;

	}



	public function ConsultarAsignatura(){
		$db=Db::conectar();
		$listaAsignatura=[];
		$select=$db->query("SELECT ASIGNATURA.NOMBRE as NombreAsig,ASIGNATURA.codigo as id FROM ASIGNATURA JOIN PROGRAMAACADEMICO \n"

		. "ON ASIGNATURA.COD_programa=PROGRAMAACADEMICO.codigo\n"
	
		. "where PROGRAMAACADEMICO.codigo=1;");

		foreach($select->fetchAll() as $AD){
		$myAD= new Actividad();
		$myAD->setNomAsig($AD['NombreAsig']);
		$myAD->setCodAsig($AD['id']);
		$listaAsignatura[]=$myAD;
	}

	return $listaAsignatura	;
}

public function ConsultarAsignaturaEspecifica($id){
	$db=Db::conectar();
	$listaAsiganturaE=[];
	$select=$db->prepare( "SELECT iFNULL(ACTIVIDAD.fechaEntrega,'-') as fechaen,ASIGNATURA.nombre as asig,ASIGNATURA.codigo as codAsig, iFNULL(ACTIVIDAD.estado,'-') as estado,ACTIVIDAD.codigo as idA, \n"

    . "(SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as nombreP,\n"

    . "(SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as apellidoP,\n"

    . "GRUPO.codigo as codGru,PI.codigo as picod, PI.codigo_SO as socod,actividad.estado FROM USUARIO JOIN DIRECTORPROGRAMA\n"

    . "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN PROGRAMAACADEMICO\n"

    . "ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA\n"

    . "ON ASIGNATURA.cod_programa= PROGRAMAACADEMICO.codigo JOIN GRUPO\n"

    . "\n"

    . "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN ACTIVIDAD\n"

    . "\n"

    . "ON ACTIVIDAD.codigoGrupo=GRUPO.codigo JOIN PI\n"

    . "\n"

    . "ON ACTIVIDAD.codPi=PI.codigo  \n"

    . "\n"

    . "WHERE ASIGNATURA.codigo=:id;");

	$select->bindValue('id',$id);
	$select->execute();

foreach($select->fetchAll() as $obAct){
	$myAD= new Actividad();
	$myAD->setid($obAct['idA']);
	$myAD->setCodAsig($obAct['codAsig']);
	$myAD->setNomProf($obAct['nombreP']);
	$myAD->setApeProf($obAct['apellidoP']);
	$myAD->setFentrega($obAct['fechaen']);
	$myAD->setNumGrupo($obAct['codGru']);
	$myAD->setNomAsig($obAct['asig']);
	$myAD->setEstado($obAct['estado']);
	$myAD->setPi($obAct[ 'picod']);
	
	$listaAsiganturaE[]=$myAD;
}

return $listaAsiganturaE;

}

public function codRub($rub){
	$db=Db::conectar();
	$select=$db->prepare("SELECT RUBRICA.CODIGO as cod FROM RUBRICA WHERE RUBRICA.nombre=:nomRub");

	$obAct=$select->fetch();
	$myObAct= new Actividad();
	$myObAct->setNomrubrica($obAct['cod']);
	
	return $myObAct;
}
public function obtenerActividad($id){
	$db=Db::conectar();
	$select=$db->prepare("SELECT ACTIVIDAD.CODIGO as id, PROGRAMAACADEMICO.nombre as prog ,ASIGNATURA.nombre as asig,GRUPO.codigo_Grup as grupo,\n"
			. "PERIODO.codigo as periodo,\n"
			. "SO.codigo as so, PI.codigo as pi, ASIGNATURA.codigo as  codAsig, RUBRICA.calificacion as caliRub,\n"
			. "RUBRICA.comentarioDir as comDir FROM ACTIVIDAD JOIN PERIODO\n"
			. "ON PERIODO.codigo=ACTIVIDAD.codPeriodo JOIN PI\n"
			. "ON PI.codigo=ACTIVIDAD.codPI JOIN SO\n"
			. "ON SO.codigo=PI.codigo_SO JOIN GRUPO\n"
			. "ON GRUPO.codigo=ACTIVIDAD.codigoGrupo JOIN ASIGNATURA\n"
			. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROGRAMAACADEMICO\n"
			. "ON PROGRAMAACADEMICO.codigo=ASIGNATURA.COD_programa JOIN PROFESOR\n"
			. "ON GRUPO.correo_pr=PROFESOR.usuario JOIN USUARIO\n"
			. "ON USUARIO.nomUsuario=PROFESOR.usuario JOIN RUBRICA\n"
			. "ON ACTIVIDAD.codigo=RUBRICA.codigo_act \n"
			. "WHERE PROFESOR.usuario='jose.luis' AND ACTIVIDAD.codigo=:id");
					
	$select->bindValue('id',$id);
	$select->execute();
	$obAct=$select->fetch();
	$myObAct= new Actividad();
	$myObAct->setId($obAct['id']);
	$myObAct->setNomProgAcademico($obAct['prog']);
	$myObAct->setNomAsig($obAct['asig']);
	$myObAct->setNumGrupo($obAct['grupo']);
	$myObAct->setPeriodo($obAct['periodo']);
	$myObAct->setSo($obAct['so']);
	$myObAct->setPi($obAct['pi']);
	$myObAct->setCodAsig($obAct['codAsig']);
	$myObAct->setCalirubrica($obAct['caliRub']);
	$myObAct->setCalicommentrubrica($obAct['comDir']);

	return $myObAct;
}


} //No borrar
    ?>