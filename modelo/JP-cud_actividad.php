<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudActividad{
		// constructor de la clase
		public function __construct(){}


		public function mostrarASIG($asig){
			$db=Db::conectar();
			$listaAsignatura=[];
			$select=$db->prepare("SELECT GRUPO.codigo_asgs as asignatura, RUBRICA.codigo_act as documento, \n"

									. "ACTIVIDAD.codigoGrupo as grupo, IFNULL(ACTIVIDAD.fechaEntrega,\'-\') as fechaEntrega, \n"
								
									. "IFNULL(ACTIVIDAD.estado,\'No Aprobado\') as estado, RUBRICA.fecha as fechaAprob \n"
								
									. "FROM GRUPO JOIN ACTIVIDAD\n"
								
									. "ON GRUPO.codigo = ACTIVIDAD.codigoGrupo JOIN \n"
								
									. "RUBRICA ON ACTIVIDAD.codigo = RUBRICA.codigo_act\n"
								
									. "WHERE GRUPO.codigo_asgs =:asig;");
								

			$select->bindValue('asig',$asig);
			$select->execute();
			foreach($select->fetchAll() as $AD){
				$myAD= new Asignatura();
				$myAD->setCodAsig($AD['asignatura']);
				$myAD->setDoc($AD['documento']);
				$myAD->setGrup($AD['grupo']);
				$myAD->setEntrega($AD['fechaEntrega']);
				$myAD->setEstado($AD['estado']);
				$myAD->setFechaAprob($AD['fechaAprob']);
				$listaAsignatura[]=$myAD;
			}

			return $listaAsignatura;
		}

	}

    ?>