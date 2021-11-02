<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudActividad{
		// constructor de la clase
		public function __construct(){}
		/*
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($actividad){
			$db=Db::conectar();
			
			//$myAct-= new Actividad();
			//$programa= $myAct->setId($actividad['programa']);
			//$asignatura= $myAct->setId($actividad['asignatura']);
			//$periodo= $myAct->setId($actividad['periodo']);
			//$selectpro=$db->query('SELECT PROGRAMAACADEMICO.codigo FROM ACTIVIDAD JOIN PROGRAMAACADEMICO ON ACTIVIDAD.codigoprogra= PROGRAMAACADEMICO.codigo WHERE PROGRAMAACADEMICO.nombre='.$programa.')';
			//$selectasig=$db->query('SELECT ASIGNATURA.codigo FROM ACTIVIDAD JOIN ASIGNATURA ON ACTIVIDAD.codigoprogra= ASIGNATURA.codigo WHERE ASIGNATURA.nombre='.$asignatura.')';
			//$selectperiodo=$db->query('SELECT PERIODO.fechaFin FROM ACTIVIDAD JOIN PERIODO ON ACTIVIDAD.codigoperiodo= PERIODO.codigo WHERE PERIODO.codigo='.$periodo.')';

			$insert=$db->prepare('INSERT INTO actividad values(NULL,:fechaLim,:medio,:codigo_asig,:codigoprogra,:codigoperiodo)');
			$insert->bindValue('nombre',$libro->getNombre());
			$insert->bindValue('autor',$libro->getAutor());
			$insert->bindValue('anio_edicion',$libro->getAnio_edicion());
			$insert->execute();
			
			$insert2=$db->prepare('INSERT INTO calificacion values(:codigo_act,:codigoPI)');
		}
		*/
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaActividadDir=[];
			$select=$db->query('SELECT ASIGNATURA.codigo as codigoAs, ACTIVIDAD.fechaLimite as fechalim ,RUBRICA.fecha as fechaen, GRUPO.codigo as codGru, ASIGNATURA.nombre as asig, CALIFICACION.estado as estado, EVALUACION.codigo_PI as codPI, (SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as nombreP, (SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as apellidoP FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.correo= DIRECTORPROGRAMA.correo_usuario JOIN PROGRAMAACADEMICO ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ACTIVIDAD ON ACTIVIDAD.codigoprogra= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA ON ACTIVIDAD.codigo_asig=ASIGNATURA.codigo JOIN EVALUACION ON EVALUACION.codigo_act= ACTIVIDAD.codigo JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR ON GRUPO.correo_pr=PROFESOR.correo_usuario JOIN RUBRICA ON GRUPO.codigo=RUBRICA.codigo_grp JOIN CALIFICACION ON RUBRICA.codigo=CALIFICACION.codigo_rub WHERE DIRECTORPROGRAMA.correo_usuario ="juan.carlos@uao.edu.co"');
 
			foreach($select->fetchAll() as $AD){
				$myAD= new ActividadDir();
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

		public function mostraract(){
			$db=Db::conectar();
			$listaActividadGen=[];
			$select=$db->query('SELECT ASIGNATURA.nombre as asig, (SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as nombreP, (SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.correo= PROFESOR.correo_usuario) as apellidoP, GRUPO.codigo as codGru,PI.codigo as picod, PI.codigo_SO as socod FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.correo= DIRECTORPROGRAMA.correo_usuario JOIN PROGRAMAACADEMICO ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ACTIVIDAD ON ACTIVIDAD.codigoprogra= PROGRAMAACADEMICO.codigo JOIN ASIGNATURA ON ACTIVIDAD.codigo_asig=ASIGNATURA.codigo JOIN EVALUACION ON EVALUACION.codigo_act= ACTIVIDAD.codigo JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN PROFESOR ON GRUPO.correo_pr=PROFESOR.correo_usuario JOIN PI ON EVALUACION.codigo_PI=PI.codigo WHERE DIRECTORPROGRAMA.correo_usuario="juan.carlos@uao.edu.co"');
 
			foreach($select->fetchAll() as $AD){
				$myAD= new ActividadGeneral();
				$myAD->setNomAsig($AD['asig']);
				$myAD->setDocente($AD['nombreP']);
				$myAD->setDocenteA($AD['apellidoP']);
				$myAD->setGrupo($AD['codGru']);
				$myAD->setSo($AD['picod']);
				$myAD->setPi($AD['socod']);
				$listaActividadGen[]=$myAD;
			}

			return $listaActividadGen;
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