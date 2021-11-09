<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudActividad{
		// constructor de la clase
		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function obtenerCodGRU($actividad){
			$db=Db::conectar();
			$select=$db->prepare("SELECT GRUPO.codigo cod FROM ASIGNATURA JOIN GRUPO\n"
					. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs \n"
					. "WHERE ASIGNATURA.nombre=:asig");
							
			$select->bindValue('asig',$asig);
			$select->execute();
			$obAct=$select->fetch();
			$myObAct= new Actividad();
			$myObAct->setGrupo($obAct['cod']);	

			return $myObAct;
		}
		
		

		public function insertarRub($actividad){
			$db=Db::conectar();
			$myObAct= new Actividad();
		
			$insert=$db->prepare('INSERT INTO RUBRICA values(NULL,:codact,:nombre,:fecha,NULL, :comentarioE,NULL,NULL)');
			$insert->bindValue('codact',$actividad->getid());
			$insert->bindValue('nombre',$actividad->getNomrubrica());
			$insert->bindValue('fecha',$actividad->getFentrega());
			$insert->bindValue('comentarioE',$actividad->getComenrubrica());
			$insert->execute();
			
			
		}

		public function insertarEvid($actividad){
			$db=Db::conectar();
			$myObAct= new Actividad();
		
			$insert=$db->prepare('INSERT INTO EVIDENCIA values(NULL,:codrub,:nombre,:fecha,NULL, :comentarioE,NULL,NULL)');
			$insert->bindValue('codact',$actividad->getid());
			$insert->bindValue('nombre',$actividad->getNomrubrica());
			$insert->bindValue('fecha',$actividad->getFentrega());
			$insert->bindValue('comentarioE',$actividad->getComenrubrica());
			$insert->execute();
			
			
		}
		public function insertar($actividad){
			$db=Db::conectar();
			$myObAct= new Actividad();
		
			$insert=$db->prepare('INSERT INTO actividad values(NULL,:medio,:codigoGrupo,"2021-03",:codPi, NULL, NULL)');
			$insert->bindValue('medio',$actividad->getMedioEv());
			$insert->bindValue('codigoGrupo',$actividad->getGrupo());
			
			$insert->bindValue('codPi',$actividad->getPi());
			$insert->execute();
			
			
		}
		public function actualizarCalificacionPen($activid){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE ACTIVIDAD SET estado="Entregado" WHERE codigo=:id');
		
			$actualizar->bindValue('id',$activid->getId());
			
			$actualizar->execute();
		}
		
		public function codRub($rub){
			$db=Db::conectar();
			$select=$db->prepare("SELECT RUBRICA.CODIGO as cod FROM RUBRICA WHERE RUBRICA.nombre=:nomRub");
 
			$obAct=$select->fetch();
			$myObAct= new Actividad();
			$myObAct->setNomrubrica($obAct['cod']);
			
			return $myObAct;
		}

		/*
		// método para mostrar todos los libros

		public function mostrar(){
			$db=Db::conectar();
			$listaActividadDir=[];
			$select=$db->query('(SELECT ASIGNATURA.codigo as codigoAs, (SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as nombreP, (SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as apellidoP, ACTIVIDAD.fechaLimite as fechalim ,RUBRICA.fecha as fechaen, GRUPO.codigo as codGru, ASIGNATURA.nombre as asig,CALIFICACION.estado as estado, EVALUACION.codigo_PI as codPI FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.correo= DIRECTORPROGRAMA.correo_usuario JOIN PROGRAMAACADEMICO ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ACTIVIDAD ON ACTIVIDAD.codigoprogra= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA ON ACTIVIDAD.codigo_asig=ASIGNATURA.codigo JOIN EVALUACION ON EVALUACION.codigo_act= ACTIVIDAD.codigo JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR ON GRUPO.correo_pr=PROFESOR.correo_usuario JOIN RUBRICA ON GRUPO.codigo=RUBRICA.codigo_grp JOIN CALIFICACION ON RUBRICA.codigo=CALIFICACION.codigo_rub WHERE DIRECTORPROGRAMA.correo_usuario="juan.carlos@uao.edu.co") UNION (SELECT ASIGNATURA.codigo as codigoAs, (SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as nombreP, (SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as apellidoP, ACTIVIDAD.fechaLimite as fechalim,"-",GRUPO.codigo as codGru, ASIGNATURA.nombre as asig, "Pendiente",EVALUACION.codigo_PI as codPI FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.correo= DIRECTORPROGRAMA.correo_usuario JOIN PROGRAMAACADEMICO ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ACTIVIDAD ON ACTIVIDAD.codigoprogra= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA ON ACTIVIDAD.codigo_asig=ASIGNATURA.codigo JOIN EVALUACION ON EVALUACION.codigo_act= ACTIVIDAD.codigo JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR ON GRUPO.correo_pr=PROFESOR.correo_usuario JOIN RUBRICA ON GRUPO.codigo=RUBRICA.codigo_grp JOIN CALIFICACION ON RUBRICA.codigo=CALIFICACION.codigo_rub WHERE DIRECTORPROGRAMA.correo_usuario ="juan.carlos@uao.edu.co")');
			
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setCodAsig($AD['codigoAs']);
				$myAD->setPi($AD['codPI']);
				$myAD->setGrupo($AD['codGru']);
				$myAD->setNomAsig($AD['asig']);
				$myAD->setDocente($AD['nombreP']);
				$myAD->setDocenteA($AD['apellidoP']);
				$myAD->setEstado($AD['estado']);
				$myAD->setFentrega($AD['fechaen']);
				$listaActividadDir[]=$myAD;
			}

			return $listaActividadDir;
		}
		

		

		public function busqGrupo($asig){
			$db=Db::conectar();
			$listaGrupos=[];
			$select=$db->prepare("SELECT GRUPO.codigo as cod FROM ASIGNATURA JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs WHERE ASIGNATURA.nombre=:asig");
 
			$select->bindValue('asig',$asig);
			$select->execute();
			foreach($select->fetchAll() as $AD){
				$myAD->setGrupo($AD['cod']);
				
			}
			
			return $listaGrupos[];
		}
*/		

		public function contarGrupo($asig){
			$db=Db::conectar();
			$select=$db->prepare("SELECT COUNT(*) as cod FROM ASIGNATURA JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs WHERE ASIGNATURA.nombre=:asig");
 
			$obAct=$select->fetch();
			$myObAct= new Actividad();
			$myObAct->setNumGrupo($obAct['cod']);
			
			return $myObAct;
		}



		public function mostraract(){
			$db=Db::conectar();
			$listaActividadGen=[];
			$select=$db->query("SELECT ASIGNATURA.nombre as asig,\n"
			. "(SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as nombreP, \n"
			. "(SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as apellidoP, \n"
			. "GRUPO.codigo as codGru,PI.codigo as picod, PI.codigo_SO as socod FROM USUARIO JOIN DIRECTORPROGRAMA \n"
			. "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN PROGRAMAACADEMICO \n"
			. "ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA \n"
			. "ON ASIGNATURA.cod_programa= PROGRAMAACADEMICO.codigo JOIN GRUPO\n"
			. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN ACTIVIDAD \n"
			. "ON ACTIVIDAD.codigoGrupo=GRUPO.codigo JOIN PI \n"
			. "ON ACTIVIDAD.codPi=PI.codigo \n"
			. "WHERE DIRECTORPROGRAMA.usuario='juan.carlos';");
 
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setNomAsig($AD['asig']);
				$myAD->setNomProf($AD['nombreP']);
				$myAD->setApeProf($AD['apellidoP']);
				$myAD->setGrupo($AD['codGru']);
				$myAD->setSo($AD['picod']);
				$myAD->setPi($AD['socod']);
				$listaActividadGen[]=$myAD;
			}

			return $listaActividadGen;
		}
		

		public function mostrarDirEnv(){
			$db=Db::conectar();
			$listaActividadDir=[];
			$select=$db->query("SELECT ACTIVIDAD.codigo as id, ASIGNATURA.codigo as codigoAs, \n"
			. "(SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR \n"
			. "ON USUARIO.nomUsuario= PROFESOR.usuario) as nombreP, \n"
			. "(SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR\n"
			. "ON USUARIO.nomUsuario= PROFESOR.usuario) as apellidoP, \n"
			. "ACTIVIDAD.fechaEntrega as fechaen, GRUPO.codigo_Grup as codGru,\n"
			. "ASIGNATURA.nombre as asig,IFNULL(RUBRICA.CALIFICACION,'Sin Calificar') as estado, \n"
			. "ACTIVIDAD.codPI as codPI FROM USUARIO JOIN DIRECTORPROGRAMA \n"
			. "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN PROGRAMAACADEMICO \n"
			. "ON DIRECTORPROGRAMA.CODIGO_PROG= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA\n"
			. "ON PROGRAMAACADEMICO.codigo=ASIGNATURA.cod_programa JOIN GRUPO \n"
			. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR \n"
			. "ON GRUPO.correo_pr=PROFESOR.usuario JOIN ACTIVIDAD\n"
			. "ON GRUPO.codigo=ACTIVIDAD.codigoGrupo JOIN RUBRICA\n"
			. "ON ACTIVIDAD.codigo=RUBRICA.codigo_act \n"
			. "WHERE DIRECTORPROGRAMA.usuario='juan.carlos' AND ACTIVIDAD.ESTADO='Entregado';");
								

			
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setid($AD['id']);
				$myAD->setCodAsig($AD['codigoAs']);
				$myAD->setNomProf($AD['nombreP']);
				$myAD->setApeProf($AD['apellidoP']);
				$myAD->setFentrega($AD['fechaen']);
				$myAD->setNumGrupo($AD['codGru']);
				$myAD->setNomAsig($AD['asig']);
				$myAD->setEstado($AD['estado']);
				$myAD->setPi($AD['codPI']);
				
				$listaActividadDir[]=$myAD;
			}

			return $listaActividadDir;
		}

		public function mostrarDirNEnv(){
			$db=Db::conectar();
			$listaActividadDir=[];
			$select=$db->query("SELECT ACTIVIDAD.codigo as id,ASIGNATURA.codigo as codigoAs, \n"
			. "(SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR \n"
			. "ON USUARIO.nomUsuario= PROFESOR.usuario) as nombreP, \n"
			. "(SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR\n"
			. "ON USUARIO.nomUsuario= PROFESOR.usuario) as apellidoP, \n"
			. "PERIODO.fechaFin as fechalim, GRUPO.codigo_Grup as codGru,\n"
			. "ASIGNATURA.nombre as asig,ACTIVIDAD.codPI as codPI,IFNULL(ACTIVIDAD.ESTADO, 'Pendiente') as estado FROM USUARIO JOIN DIRECTORPROGRAMA \n"
			. "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN PROGRAMAACADEMICO \n"
			. "ON DIRECTORPROGRAMA.CODIGO_PROG= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA\n"
			. "ON PROGRAMAACADEMICO.codigo=ASIGNATURA.cod_programa JOIN GRUPO \n"
			. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR \n"
			. "ON GRUPO.correo_pr=PROFESOR.usuario JOIN ACTIVIDAD\n"
			. "ON GRUPO.codigo=ACTIVIDAD.codigoGrupo JOIN PERIODO\n"
			. "ON ACTIVIDAD.codPeriodo=PERIODO.codigo\n"
			. "WHERE DIRECTORPROGRAMA.usuario='juan.carlos' AND ACTIVIDAD.ESTADO IS NULL;");
								

			
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setid($AD['id']);
				$myAD->setCodAsig($AD['codigoAs']);
				$myAD->setNomProf($AD['nombreP']);
				$myAD->setApeProf($AD['apellidoP']);
				$myAD->setFlimite($AD['fechalim']);
				$myAD->setNumGrupo($AD['codGru']);
				$myAD->setNomAsig($AD['asig']);
				$myAD->setEstado($AD['estado']);
				$myAD->setPi($AD['codPI']);
				
				$listaActividadDir[]=$myAD;
			}

			return $listaActividadDir;
		}

		public function mostrarProEnv(){
			$db=Db::conectar();
			$listaActividadPro=[];
			$select=$db->query("SELECT ASIGNATURA.NOMBRE as asigN, ASIGNATURA.CODIGO as asigC, ACTIVIDAD.codigo as id,\n"
								. "GRUPO.codigo_Grup as grupo,ACTIVIDAD.CODPI as pi,RUBRICA.CALIFICACION as estado,\n"
								. "IFNULL(ACTIVIDAD.FECHAENTREGA, '-') as fentrega, PERIODO.fechaFin as fechalim FROM ACTIVIDAD JOIN PERIODO\n"
								. "ON PERIODO.codigo=ACTIVIDAD.codPeriodo JOIN GRUPO\n"
								. "ON GRUPO.codigo=ACTIVIDAD.codigoGrupo JOIN ASIGNATURA\n"
								. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR\n"
    							. "ON GRUPO.correo_pr=PROFESOR.usuario JOIN RUBRICA\n"
								. "ON ACTIVIDAD.codigo=RUBRICA.codigo_act \n"
    							. "WHERE PROFESOR.usuario='jose.luis' AND ACTIVIDAD.ESTADO='Entregado';");
								

			
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setid($AD['id']);
				$myAD->setCodAsig($AD['asigC']);
				$myAD->setPi($AD['pi']);
				$myAD->setNumGrupo($AD['grupo']);
				$myAD->setNomAsig($AD['asigN']);
				$myAD->setEstado($AD['estado']);
				$myAD->setFentrega($AD['fentrega']);
				
				$listaActividadPro[]=$myAD;
			}

			return $listaActividadPro;
		}


		public function mostrarProNEnv(){
			$db=Db::conectar();
			$listaActividadDir=[];
			$select=$db->query("SELECT ASIGNATURA.NOMBRE as asigN, ASIGNATURA.CODIGO as asigC, ACTIVIDAD.codigo as id,\n"
								. "GRUPO.codigo_Grup as grupo,ACTIVIDAD.CODPI as pi,IFNULL(ACTIVIDAD.ESTADO, 'Pendiente') as estado,\n"
								. "IFNULL(ACTIVIDAD.FECHAENTREGA, '-') as fentrega, PERIODO.fechaFin as fechalim FROM ACTIVIDAD JOIN PERIODO\n"
								. "ON PERIODO.codigo=ACTIVIDAD.codPeriodo JOIN GRUPO\n"
								. "ON GRUPO.codigo=ACTIVIDAD.codigoGrupo JOIN ASIGNATURA\n"
								. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR\n"
    							. "ON GRUPO.correo_pr=PROFESOR.usuario\n"
    							. "WHERE PROFESOR.usuario='jose.luis'AND ACTIVIDAD.ESTADO IS NULL;");
								

			
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD= new Actividad();
				$myAD->setid($AD['id']);
				$myAD->setCodAsig($AD['asigC']);
				$myAD->setPi($AD['pi']);
				$myAD->setNumGrupo($AD['grupo']);
				$myAD->setNomAsig($AD['asigN']);
				
				$myAD->setEstado($AD['estado']);
				$myAD->setFlimite($AD['fechalim']);
				$listaActividadDir[]=$myAD;
			}

			return $listaActividadDir;
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


		public function obtenerIngrActividad($id){
			$db=Db::conectar();
			$select=$db->prepare("SELECT ACTIVIDAD.CODIGO as id, PROGRAMAACADEMICO.nombre as prog ,ASIGNATURA.nombre as asig,GRUPO.codigo_Grup as grupo,\n"
					. "PERIODO.codigo as periodo,(SELECT USUARIO.nombre FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario) as DirectorNomb,(SELECT USUARIO.apellido FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario) as DirectorApellido, \n"
					. "SO.codigo as so, PI.codigo as pi, ACTIVIDAD.medioEvaluacion as medio FROM ACTIVIDAD JOIN PERIODO\n"
					. "ON PERIODO.codigo=ACTIVIDAD.codPeriodo JOIN PI\n"
					. "ON PI.codigo=ACTIVIDAD.codPI JOIN SO\n"
					. "ON SO.codigo=PI.codigo_SO JOIN GRUPO\n"
					. "ON GRUPO.codigo=ACTIVIDAD.codigoGrupo JOIN ASIGNATURA\n"
					. "ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROGRAMAACADEMICO\n"
					. "ON PROGRAMAACADEMICO.codigo=ASIGNATURA.COD_programa JOIN PROFESOR\n"
					. "ON GRUPO.correo_pr=PROFESOR.usuario \n"
					. "WHERE PROFESOR.usuario='jose.luis' AND ACTIVIDAD.codigo=:id");
							
			$select->bindValue('id',$id);
			$select->execute();
			$obAct=$select->fetch();
			$myObAct= new Actividad();
			$myObAct->setId($obAct['id']);
			$myObAct->setNomProgAcademico($obAct['prog']);
			$myObAct->setNomProf($obAct['DirectorNomb']);
			$myObAct->setApeProf($obAct['DirectorApellido']);
			$myObAct->setNomAsig($obAct['asig']);
			$myObAct->setNumGrupo($obAct['grupo']);
			$myObAct->setPeriodo($obAct['periodo']);
			$myObAct->setSo($obAct['so']);
			$myObAct->setPi($obAct['pi']);
			$myObAct->setMedioEv($obAct['medio']);
			

			return $myObAct;
		}

		public function obtenerpiselc($pi){
			$db=Db::conectar();
			$select=$db->prepare("SELECT nombre, codigo as pi FROM PI \n"
								. "WHERE PI.codigo=:pi;");
							
			$select->bindValue('pi',$pi);
			$select->execute();
			$obAct=$select->fetch();
			$myObAct= new Actividad();
			$myObAct->setPi($obAct['pi']);
			$myObAct->setNomPi($obAct['nombre']);
			
			

			return $myObAct;
		}

		public function selectAsigna(){
			$db=Db::conectar();
			$listaActividadDir=[];
			$select=$db->query("SELECT ASIGNATURA.nombre as asig, ASIGNATURA.codigo as codas\n"
			. "FROM USUARIO JOIN DIRECTORPROGRAMA \n"
			. "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN PROGRAMAACADEMICO \n"
			. "ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA \n"
			. "ON ASIGNATURA.cod_programa= PROGRAMAACADEMICO.codigo \n"
			. "WHERE DIRECTORPROGRAMA.usuario='juan.carlos';");
								

			
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setNomAsig($AD['asig']);
				$myAD->setCodAsig($AD['codas']);				
				$listaActividadDir[]=$myAD;
			}

			return $listaActividadDir;
		}
		
		public function obtenerProgramaDirec(){
			$db=Db::conectar();
			$progDir=[];
			$select=$db->query("SELECT PROGRAMAACADEMICO.nombre as prog, PROGRAMAACADEMICO.codigo as codprog, USUARIO.nombre as nomDi, USUARIO.apellido as apeDi \n"
			. "FROM USUARIO JOIN DIRECTORPROGRAMA\n"
			. "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN programaacademico \n"
			. "ON DIRECTORPROGRAMA.codigo_prog=programaacademico.codigo \n"
			. "WHERE DIRECTORPROGRAMA.usuario='juan.carlos';");
							
			
			foreach($select->fetchAll() as $AD){
			$myObAct= new Actividad();
			$myObAct->setCodProgAcademico($AD['codprog']);
			$myObAct->setNomProgAcademico($AD['prog']);
			$myObAct->setNomDi($AD['nomDi']);
			$myObAct->setApeDi($AD['apeDi']);
			
			$progDir[]=$myObAct;
			}
			return $progDir;
		}

		public function obtenerAsi(){
			$db=Db::conectar();
			$progDir=[];
			$select=$db->query("SELECT GRUPO.codigo as codG, GRUPO.codigo_Grup as nG, GRUPO.codigo_asgs as ca, ASIGNATURA.nombre as na\n"

			. "FROM USUARIO JOIN DIRECTORPROGRAMA\n"
		
			. "ON USUARIO.nomUsuario= DIRECTORPROGRAMA.usuario JOIN programaacademico\n"
		
			. "ON DIRECTORPROGRAMA.codigo_prog=programaacademico.codigo JOIN asignatura \n"
		
			. "ON ASIGNATURA.COD_PROGRAMA=PROGRAMAACADEMICO.codigo JOIN GRUPO \n"
		
			. "ON GRUPO.codigo_asgs=ASIGNATURA.codigo \n"
		
			. "WHERE DIRECTORPROGRAMA.usuario='juan.carlos';");
							
			
			foreach($select->fetchAll() as $AD){
			$myObAct= new Actividad();
			$myObAct->setGrupo($AD['codG']);
			$myObAct->setCodAsig($AD['ca']);
			$myObAct->setNomAsig($AD['na']);
			$myObAct->setNumGrupo($AD['nG']);
			
			$progDir[]=$myObAct;
			}
			return $progDir;
		}
		


		public function ConsultarSO(){
			$db=Db::conectar();
			$listaSO=[];
			$select=$db->query("SELECT codigo as So, nombre as son from so;");

			foreach($select->fetchAll() as $AD){
			$myAD= new Actividad();
			$myAD->setSo($AD['So']);
			$myAD->setNomSo($AD['son']);
			$listaSO[]=$myAD;
		}

		return $listaSO;
		}

			/*
		public function soEsp(){
			$db=Db::conectar();
			$progDir=[];
			$select=$db->query("select PI.codigo as piCod, MAX(ACTIVIDAD.fechaEntrega) as fecha,COUNT(*) as total FROM ACTIVIDAD JOIN PI ON PI.codigo=ACTIVIDAD.codPi JOIN SO ON SO.codigo=PI.codigo_SO WHERE SO.codigo=1 GROUP by pi.codigo");
							
			
			foreach($select->fetchAll() as $AD){
			$myObAct= new Actividad();
			$myObAct->setPi($AD['piCod']);
			$myObAct->setFentrega($AD['fecha']);
			$myObAct->setCodAsig($AD['total']);
					
			$progDir[]=$myObAct;
			}
			return $progDir;
		}
		

		

		

		public function obtenerpiselctabla($pi, $asig){
			$db=Db::conectar();
			$select=$db->prepare("SELECT nombre, codigo as pi FROM PI \n"
								. "WHERE PI.codigo=:pi;");
							
			$select->bindValue('pi',$pi);
			$select->bindValue('asig',$asig);
			$select->execute();
			$obAct=$select->fetch();
			$myObAct= new Actividad();
			$myObAct->setPi($obAct['pi']);
			$myObAct->setNomPi($obAct['nombre']);
			
			

			return $myObAct;
		}

		
 
		/*
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM libros WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM libros WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId($libro['id']);
			$myLibro->setNombre($libro['nombre']);
			$myLibro->setAutor($libro['autor']);
			$myLibro->setAnio_edicion($libro['anio_edicion']);
			return $myLibro;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE libros SET nombre=:nombre, autor=:autor,anio_edicion=:anio  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('nombre',$libro->getNombre());
			$actualizar->bindValue('autor',$libro->getAutor());
			$actualizar->bindValue('anio',$libro->getAnio_edicion());
			$actualizar->execute();
		}
		*/
	}

?>