<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudActividad{
		// constructor de la clase
		public function __construct(){}


	
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
				$myAD->setSo($AD['Pi']);
				$myAD->setPi($AD['So']);
				$listaActividadGen[]=$myAD;
			}

			return $listaActividadGen;
		}
	}
    ?>