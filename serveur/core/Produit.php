<?php
require_once __DIR__ .'/DataBase.php';
class Produit extends DataBase{

	public function liste(){
        $Rq='SELECT `Code`, `Nom`, `Prix`, `Quantite`, `Img`, `Categorie`, `Description` from `produit`';
		$Produits = $this->query($Rq);
		return $Produits;
	}
	public function listeByCat($cat){
        $Rq='SELECT `Code`, `Nom`, `Prix`, `Quantite`, `Img`, `Categorie`, `Description`from `produit` where `Categorie`=:Categorie;';
		$Produits = $this->query($Rq,array("Categorie"=>$cat));
			return $Produits;
	}
	public function listebyId($Param){
		$Rq="SELECT `Code`, `Nom`, `Prix`, `Quantite`, `Img`, `Categorie`, `Description` FROM `produit` WHERE Code=:Code";
       // $Rq='select Code,Nom,Prix,Quantite,Img,Categorie,Description from Produit where Code=:Code;';
		$Produits = $this->query($Rq,$Param);
		
		return $Produits;
    }
    public function Ajout($Param){
		
		$Rq = 'insert into Produit (Nom,Prix,Quantite,Img,Categorie,Description)values (:Nom,:Prix,:Quantite,:Img,:Cat,:Description)';
		$Produits = $this->query($Rq,$Param);
		return $Produits;
    }
    public function delete($Param){
		
		$Rq = 'TRUNCATE TABLE Produit where  Code=:Code';
		$Produits = $this->query($Rq,$Param);
		return $Produits;
	}
}
?>