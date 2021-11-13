<?php
	class Actividad{
		private $id;
		private $medioEvaluacion;
		private $estado;
		private $fentrega;
		private $aprobada;
		private $rechazada;
		private $total;

		private $grupo;
		private $numGrupo;

		private $codProgAcademico;
		private $nomProgAcademico;

		private $codAsig;
		private $nomAsig;

		private $periodo;
		private $flimite;

		private $pi;
		private $nomPi;
		private $so;
		private $nomSo;
		private $descSo;

		private $nomProf;
		private $apeProf;

		private $nomDi;
		private $apeDi;

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


		public function getAprobada(){
			return $this->aprobada;
		}
 
		public function setAprobada($aprobada){
			$this->aprobada = $aprobada;
		}

		public function getRechazada(){
			return $this->rechazada;
		}
 
		public function setRechazada($rechazada){
			$this->rechazada = $rechazada;
		}
		public function getTotal(){
			return $this->total;
		}
 
		public function setTotal($total){
			$this->total = $total;
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

		public function getNomPi(){
			return $this->$nomPi;
		}
 
		public function setNomPi($nomPi){
			$this->nomPi = $nomPi;
		}


		public function getSo(){
			return $this->so;
		}
 
		public function setSo($so){
			$this->so = $so;
		}

		public function getNomSo(){
			return $this->nomSo;
		}
 
		public function setNomSo($nomSo){
			$this->nomSo = $nomSo;
		}
		
		public function getDescSo(){
			return $this->descSo;
		}
 
		public function setDescSo($descSo){
			$this->descSo = $descSo;
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

		


		public function getNomDi(){
			return $this->nomDi;
		}
 
		public function setNomDi($nomDi){
			$this->nomDi = $nomDi;
		}

		public function getApeDi(){
			return $this->apeDi;
		}
 
		public function setApeDi($apeDi){
			$this->apeDi = $apeDi;
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





		public function getCodEvidencia1(){
			return $this->codevidencia1;
		}
 
		public function setCodEvidencia1($codevidencia1){
			$this->codevidencia1 = $codevidencia1;
		}

		public function getNomevidencia1(){
			return $this->nomevidencia1;
		}
 
		public function setNomevidencia1($nomevidencia1){
			$this->nomevidencia1 = $nomevidencia1;
		}

		public function getArchevidencia1(){
			return $this->archevidencia1;
		}
 
		public function setArchevidencia1($archevidencia1){
			$this->archevidencia1 = $archevidencia1;
		}
		

		public function getNivelevidencia1(){
			return $this->nivelevidencia1;
		}
 
		public function setNivelevidencia1($nivelevidencia1){
			$this->nivelevidencia1 = $nivelevidencia1;
		}

		public function getComevidencia1(){
			return $this->comevidencia1;
		}
 
		public function setComevidencia1($comevidencia1){
			$this->comevidencia1 = $comevidencia1;
		}


	

	}
?>