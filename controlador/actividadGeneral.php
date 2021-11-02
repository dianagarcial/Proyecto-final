<?php
	class ActividadGeneral{
        private $nomAsig;
        private $docente;
		private $docenteA;
		private $grupo;
        private $so;
		private $pi;
        
 
		function __construct(){}

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

        public function getGrupo(){
			return $this->grupo;
		}
 
		public function setGrupo($grupo){
			$this->grupo = $grupo;
		}

 
		
 
        public function getSo(){
			return $this->so;
		}
 
		public function setSo($so){
			$this->so = $so;
		}

		public function getPi(){
			return $this->pi;
		}
 
		public function setPi($pi){
			$this->pi = $pi;
		}

		
				
	}
?>