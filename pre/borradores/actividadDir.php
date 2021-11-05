<?php
	class ActividadDir{
		private $codAsig;
		private $pi;
		private $grupo;
		private $nomAsig;
		private $docente;
		private $docenteA;
		private $estado;
		private $fentrega;
		
 
		function __construct(){}
 
		public function getCodAsig(){
		return $this->codAsig;
		}
 
		public function setCodAsig($codAsig){
			$this->codAsig = $codAsig;
		}
 
		public function getPi(){
			return $this->pi;
		}
 
		public function setPi($pi){
			$this->pi = $pi;
		}

		
		public function getGrupo(){
			return $this->grupo;
		}
 
		public function setGrupo($grupo){
			$this->grupo = $grupo;
		}
 
		public function getNomAsig(){
		return $this->nomAsig;
		}
 
		public function setNomAsig($nomAsig){
			$this->nomAsig = $nomAsig;
		}
		public function getDocente(){
			return $this->docente;
		}
 
		public function setDocente($docente){
			$this->docente = $docente;
		}

		public function getDocenteA(){
			return $this->docenteA;
		}
 
		public function setDocenteA($docenteA){
			$this->docenteA = $docenteA;
		}
		public function getEstado(){
			return $this->estado;
		}
 
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getFentrega(){
			return $this->fentrega;
		}
 
		public function setFentrega($fentrega){
			$this->fentrega = $fentrega;
		}
		
	}
?>