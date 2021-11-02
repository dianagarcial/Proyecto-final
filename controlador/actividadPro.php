<?php
	class ActividadPro{
		private $codAsig;
		private $pi;
		private $grupo;
		private $nomAsig;
		private $estado;
		private $fentrega;
        private $flimite;
		
 
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
		
        public function getFlimite(){
			return $this->flimite;
		}
 
		public function setFlimite($flimite){
			$this->flimite = $flimite;
		}
	}
?>