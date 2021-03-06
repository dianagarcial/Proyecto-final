<?php
// incluye la clase Db
require_once('../modelo/conexion.php');
 
	class CrudActividad{
		// constructor de la clase
		public function __construct(){}

		public function mostrarA($asig){
			$db=Db::conectar();
			$listaAsignatura=[];
			$select=$db->prepare("SELECT  ASIGNATURA.nombre as nomAS from ASIGNATURA WHERE ASIGNATURA.codigo =:asig;");
								

			$select->bindValue('asig',$asig);
			$select->execute();
			$myAD= new Actividad();
			$AD=$select->fetch();
			$myAD->setNomAsig($AD['nomAS']);
		

			return $myAD;
		}


		public function mostrarASIG($asig){
			$db=Db::conectar();
			$listaAsignatura=[];
			$select=$db->prepare("SELECT GRUPO.codigo_asgs as asignatura, ASIGNATURA.nombre as nomAS, RUBRICA.codigo_act as documento, GRUPO.codigo_Grup as grup, PI.codigo as pi, \n"

									. "ACTIVIDAD.codigoGrupo as grupo, IFNULL(ACTIVIDAD.fechaEntrega,'-') as fechaEntrega, \n"
								
									. "IFNULL(ACTIVIDAD.estado,'No Entregado') as estado, RUBRICA.fecha as fechaAprob \n"
								
									. "FROM GRUPO JOIN ACTIVIDAD\n"
								
									. "ON GRUPO.codigo = ACTIVIDAD.codigoGrupo JOIN PI ON PI.codigo=ACTIVIDAD.codPi JOIN RUBRICA\n"
								
									. "RUBRICA ON ACTIVIDAD.codigo = RUBRICA.codigo_act JOIN ASIGNATURA ON ASIGNATURA.codigo=GRUPO.codigo_asgs\n"
								
									. "WHERE GRUPO.codigo_asgs =:asig;");
								

			$select->bindValue('asig',$asig);
			$select->execute();
			foreach($select->fetchAll() as $AD){
				$myAD= new Actividad();
				$myAD->setCodAsig($AD['asignatura']);
				$myAD->setNomAsig($AD['nomAS']);
				$myAD->setNumGrupo($AD['grup']);
				$myAD->setPi($AD['pi']);
				$myAD->setid($AD['documento']);
				$myAD->setGrupo($AD['grupo']);
				$myAD->setFentrega($AD['fechaEntrega']);
				$myAD->setEstado($AD['estado']);
				$listaAsignatura[]=$myAD;
			}

			return $listaAsignatura;
		}


		public function obtenerActividadDir($id){
            $db=Db::conectar();
            $select=$db->prepare("SELECT ACTIVIDAD.codigo as id, PROGRAMAACADEMICO.nombre as Programa,ASIGNATURA.nombre as Asignatura,ASIGNATURA.codigo as codigoAsg, Grupo.Codigo_Grup as grupo,\n"

            . "PERIODO.codigo as Periodo,(SELECT USUARIO.nombre FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as ProfesorNomb,\n"

            . "(SELECT USUARIO.apellido FROM USUARIO JOIN PROFESOR ON USUARIO.nomUsuario= PROFESOR.usuario) as ProfesorApellido, \n"

            . "SO.codigo as So,PI.codigo as PI,ACTIVIDAD.medioEvaluacion as metodo, RUBRICA.archivo as archivo, RUBRICA.calificacion as calif, RUBRICA.comentarioDir as comen FROM ACTIVIDAD JOIN RUBRICA ON RUBRICA.codigo_act=ACTIVIDAD.codigo JOIN PERIODO\n"

            . "ON ACTIVIDAD.codPeriodo=Periodo.codigo JOIN PI\n"

            . "ON ACTIVIDAD.codPI=PI.codigo join SO\n"

            . "on PI.codigo_SO=SO.codigo join GRUPO\n"

            . "ON ACTIVIDAD.codigoGrupo=grupo.CODIGO join Asignatura\n"

            . "on GRUPO.codigo_asgs=ASIGNATURA.codigo join PROFESOR\n"

            . "on GRUPO.correo_pr=PROFESOR.usuario join USUARIO\n"

            . "ON PROFESOR.usuario=USUARIO.nomUSuario join PROGRAMAACADEMICO\n"

            . "ON ASIGNATURA.COD_programa=PROGRAMAACADEMICO.codigo \n"

            . "where PROFESOR.usuario='jose.luis' AND ACTIVIDAD.codigo=:id;");

			$select->bindValue('id',$id);
            $select->execute();
            $obAct=$select->fetch();
            $myObAct= new Actividad();
            $myObAct->setId($obAct['id']);
            $myObAct->setNomProgAcademico($obAct['Programa']);
            $myObAct->setNomAsig($obAct['Asignatura']);
            $myObAct->setNumGrupo($obAct['grupo']);
            $myObAct->setPeriodo($obAct['Periodo']);
            $myObAct->setNomProf($obAct['ProfesorNomb']);
            $myObAct->setApeProf($obAct['ProfesorApellido']);
            $myObAct->setSo($obAct['So']);
            $myObAct->setPi($obAct['PI']);
            $myObAct->setCodAsig($obAct['codigoAsg']);
            $myObAct->setMedioEv($obAct['metodo']);
			$myObAct->setCalirubrica($obAct['calif']);
			$myObAct->setCalicommentrubrica($obAct['comen']);
			$myObAct->setArchirubrica($obAct['archivo']);
            return $myObAct;
        }

		public function actualizar($activid){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE RUBRICA SET calificacion=:calif , comentarioDir=:comentario WHERE codigo_act =:id');

			
			$actualizar->bindValue('id',$activid->getId());
			$actualizar->bindValue('calif',$activid->getCalirubrica());
			$actualizar->bindValue('comentario',$activid->getCalicommentrubrica());
			$actualizar->execute();
		}


		
	}

    ?>