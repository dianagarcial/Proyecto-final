<?php
	class Actividad{
		private $programa;
		private $asignatura;
		private $periodo;
		private $director;
		private $metodo;
		private $stOut1;
		private $piOut1;
		private $stOut2;
		private $piOut2;

	}
 
		function __construct(){}
 
		public function getPrograma(){
		return $this->programa;
		}
 
		public function setPrograma($programa){
			$this->programa = $programa;
		}
 
		public function getAsignatura(){
			return $this->asignatura;
		}
 
		public function setAsignatura($asignatura){
			$this->asignatura = $asignatura;
		}

		
		public function getPeriodo(){
			return $this->periodo;
		}
 
		public function setPeriodo($periodo){
			$this->periodo = $periodo;
		}
 
		public function getDirector(){
		return $this->director
		}
 
		public function setDirector($director){
			$this->director = $director;
		}
		public function getMetodo(){
			return $this->metodo;
		}
 
		public function setMetodo($metodo){
			$this->metodo = $metodo;
		}

		public function getStOut1(){
			return $this->stOut1;
		}
 
		public function setStOut1($stOut1){
			$this->stOut1 = $stOut1;
		}
		public function getPiOut1(){
			return $this->piOut1;
		}
 
		public function setPiOut1($piOut1){
			$this->piOut1 = $piOut1;
		}
		public function getStOut2(){
			return $this->stOut2;
		}
 
		public function setStOut2($stOut2){
			$this->stOut2 = $stOut2;
		}
		public function getPiOut2(){
			return $this->piOut2;
		}
 
		public function setPiOut2($piOut2){
			$this->piOut2 = $piOut2;
		}
	}
?>