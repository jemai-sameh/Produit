<?php
require_once "core/Produit.php";
require_once "core/Commande.php";
require_once "core/Detail.php";
	
$Commande= new Commande();
$Commandes=$Commande->listeByCin(12458695);

$Detail= new Detail();
$Produit= new Produit();

foreach ($Commandes as &$Commande){
        $id=array("Commande"=>$Commande['IdC']);
        $Commande['Details']=$Detail->listeByCommande($id);
        foreach ($Commande['Details'] as &$Detai){
            $code=array("Code"=>$Detai['Produit']);            
            $Detai['Produits']=$Produit->listebyId($code);          
        }        
}

/*echo '<pre>';
var_dump($Commandes);
echo '</pre>';*/



header('Content-type: text/xml');
include "view/listeC.php";
?>