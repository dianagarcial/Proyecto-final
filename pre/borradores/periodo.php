<?php
	class Periodo{
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