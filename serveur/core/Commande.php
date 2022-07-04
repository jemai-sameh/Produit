<?php
require_once __DIR__ .'/DataBase.php';
class Commande extends DataBase{

	public function liste(){
        $Rq="`IdC`, `Montant`, `CinCl`, `Date` FROM `commande`";
		$Commandes = $this->query($Rq);
		return $Commandes;
	}
	public function listeByCin($cin){
		$Rq="SELECT `IdC`, `Montant`, `CinCl`, `Date` FROM `commande` WHERE `CinCl`=:CinCl ";
		$Commandes = $this->query($Rq,array('CinCl'=>$cin));
		return $Commandes;
	}
    public function Ajout($Param){
		
		$Rq = 'insert into Commande (IdC, Montant,CinCl,Date)values (:IdC,:Montant,:CinCl,:Date)';
		$Commandes = $this->query($Rq,$Param);
		return $Commandes;
    }
    public function delete($Param){
		
		$Rq = 'TRUNCATE TABLE Commande where  IdC=:IdC';
		$Commandes = $this->query($Rq,$Param);
		return $Commandes;
	}
}
?>