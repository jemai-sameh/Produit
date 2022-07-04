<?php
class DataBase{
	
	private  $Connex;
	public function __construct(){
		
		$this->Connex = new PDO('mysql:host=localhost;dbname=gestionProduit', 'root', '');
		
	}
	public function execute($Rq, $Param){
		
		$Stm = $this->Connex->prepare($Rq);
		//print_r($this->Connex->errorInfo());
		 
		$Retour = $Stm->execute($Param);
		
	//print_r($Stm->errorInfo());
		return $Retour;
	}
	public function query($Rq, $Param = array()){
		if(count($Param)){
			$Stm = $this->Connex->prepare($Rq);
			$Retour = $Stm->execute($Param);
			return $Stm->fetchAll(PDO::FETCH_ASSOC);
		}else{
			$Result = $this->Connex->query($Rq);
			return $Result->fetchAll(PDO::FETCH_ASSOC);
		}
	}
}
?>