<?php
require_once __DIR__ .'/DataBase.php';
class Detail extends DataBase{

	public function liste(){
        $Rq='select IdDC,Commande,Produit from Detail;';
        $Produits = $this->query($Rq);
		return $Produits;
    }
    public function listeByPdt($Param){
        $Rq='select IdDC,Commande,Produit from Detail where Produit=:Produit;';
       	$Produits = $this->query($Rq,$Param);
		return $Produits;
    }
    public function listeByCommande($Param){
      $Rq="SELECT `IdDC`, `Commande`, `Produit` FROM `detail` WHERE Commande=:Commande";
        $Produits = $this->query($Rq,$Param);
		return $Produits;
    }
    public function Ajout($Param){
		
		$Rq = 'insert into Detail (IdDC,Commande,Produit)values (:IdDC,:Commande,:Produit)';
		$Produits = $this->query($Rq,$Param);
		return $Produits;
    }
    public function delete($Param){
		
		$Rq = 'TRUNCATE TABLE Detail where  IdDC=:IdDC';
		$Produits = $this->query($Rq,$Param);
		return $Produits;
	}
}
?>