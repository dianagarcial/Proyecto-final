<?php
	class Actividad{
		private $id;
		private $medioEv;
		private $grupo;
		private $periodo;
		private $pi;
		private $estado;
		private $fentrega;
		
        

		
 
		function __construct(){}
 
		public function getId(){
		return $this->id;
		}
	
		public function setId($id){
			$this->id = $id;
		}

		public function getMedioEv(){
			return $this->medioEv;
		}
 
		public function setMedioEv($medioEv){
			$this->medioEv = $medioEv;
		}

		public function getGrupo(){
			return $this->grupo;
		}
 
		public function setGrupo($grupo){
			$this->grupo = $grupo;
		}

		public function getPeriodo(){
		return $this->periodo;
		}
 
		public function setPeriodo($periodo){
			$this->periodo = $periodo;
		}
 
		public function getPi(){
			return $this->pi;
		}
 
		public function setPi($pi){
			$this->pi = $pi;
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
?>