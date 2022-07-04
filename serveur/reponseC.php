<?php  
if(isset($_GET['XML']))
	$xml = $_GET['XML'];
	
$Params = new SimpleXMLElement($xml);
require_once 'core/Produit.php';
require_once 'core/Commande.php';
require_once 'core/Detail.php';

$Commande= new Commande();
//echo $Params->Commande->CinCl;
$Commandes=$Commande->listeByCin($Params->Commande->CinCl);
//var_dump($Commandes);
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
/*foreach ($Commandes as &$Commande){
    $p['Montant']=0;
    foreach ($Commande['Details']['Produits'] as &$p) {
        $p['Montant']+=$p['Prix']*$p['Quantite'];
    }
}*/
//var_dump($Commandes);

/*$Produit = new Produit();
$Produits =$Produit->listeByCat($Params->Produit->Categorie);*/
//$Produits=$Params->Commande->CinCl;
/*foreach ($Produits as &$p) {
    $Montant=$p['Prix']*$p['Quantite'];
}*/
header('Content-type: text/xml');
include "view/listeC.php";

	
?>