<?php
	class Actividad{
		private $id;
		private $medioEvaluacion;
		private $estado;
		private $fentrega;

		private $grupo;
		private $numGrupo;

		private $codProgAcademico;
		private $nomProgAcademico;

		private $codAsig;
		private $nomAsig;

		private $periodo;
		private $flimite;

		private $pi;
		private $so;

		private $nomProf;
		private $apeProf;

		private $codrubrica;
		private $archirubrica;
		private $nomrubrica;
		private $fecharubrica;
		private $comenrubrica;
		private $calirubrica;
		private $calicommentrubrica;

		private $codevidencia1;
		private $nomevidencia1;
		private $archevidencia1;
		private $nivelevidencia1;		
		private $comevidencia1;
		
		private $codevidencia2;
		private $nomevidencia2;
		private $archevidencia2;
		private $nivelevidencia2;		
		private $comevidencia2;

		private $codevidencia3;
		private $nomevidencia3;
		private $archevidencia3;
		private $nivelevidencia3;		
		private $comevidencia3;

		//FALTAN LOS GET Y SET DE TODO ESTO LOS VOY AGREGANDO CUANDO LOS UTILIZO       

		
 
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




		public function getGrupo(){
			return $this->grupo;
		}
 
		public function setGrupo($grupo){
			$this->grupo = $grupo;
		}

		public function getNumGrupo(){
			return $this->numGrupo;
		}
		public function setNumGrupo($numGrupo){
			$this->numGrupo = $numGrupo;
		}






		public function getCodProgAcademico(){
			return $this->codProgAcademico;
			}
	 
		public function setCodProgAcademico($codProgAcademico){
			$this->codProgAcademico = $codProgAcademico;
		}

		public function getNomProgAcademico(){
			return $this->nomProgAcademico;
			}
	 
		public function setNomProgAcademico($nomProgAcademico){
			$this->nomProgAcademico = $nomProgAcademico;
		}





		public function getCodAsig(){
		return $this->codAsig;
		}
 
		public function setCodAsig($codAsig){
			$this->codAsig = $codAsig;
		}

		public function getNomAsig(){
			return $this->nomAsig;
			}
	 
		public function setNomAsig($nomAsig){
			$this->nomAsig = $nomAsig;
		}




		public function getPeriodo(){
			return $this->periodo;
		}
 
		public function setPeriodo($periodo){
			$this->periodo = $periodo;
		}

		public function getFlimite(){
			return $this->flimite;
		}
 
		public function setFlimite($flimite){
			$this->flimite = $flimite;
		}





 
		public function getPi(){
			return $this->pi;
		}
 
		public function setPi($pi){
			$this->pi = $pi;
		}

		public function getSo(){
			return $this->so;
		}
 
		public function setSo($so){
			$this->so = $so;
		}





		public function getNomProf(){
			return $this->nomProf;
		}
 
		public function setNomProf($nomProf){
			$this->nomProf = $nomProf;
		}

		public function getApeProf(){
			return $this->apeProf;
		}
 
		public function setApeProf($apeProf){
			$this->apeProf = $apeProf;
		}

		
		



		public function getCodrubrica(){
			return $this->codrubrica;
		}
 
		public function setCodrubrica($codrubrica){
			$this->codrubrica = $codrubrica;
		}

		public function getArchirubrica(){
			return $this->codrubrica;
		}
 
		public function setArchirubrica($codrubrica){
			$this->codrubrica = $codrubrica;
		}
		
		public function getNomrubrica(){
			return $this->nomrubrica;
		}
 
		public function setNomrubrica($nomrubrica){
			$this->nomrubrica = $nomrubrica;
		}

		public function getFecharubrica(){
			return $this->fecharubrica;
		}
 
		public function setFecharubrica($fecharubrica){
			$this->fecharubrica = $fecharubrica;
		}

		public function getComenrubrica(){
			return $this->comenrubrica;
		}
 
		public function setComenrubrica($comenrubrica){
			$this->comenrubrica = $comenrubrica;
		}

		public function getCalirubrica(){
			return $this->calirubrica;
		}
 
		public function setCalirubrica($calirubrica){
			$this->calirubrica = $calirubrica;
		}
		public function getCalicommentrubrica(){
			return $this->calicommentrubrica;
		}
 
		public function setCalicommentrubrica($calicommentrubrica){
			$this->calicommentrubrica = $calicommentrubrica;
		}









	}
?>