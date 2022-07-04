<?php  
if(isset($_GET['XML']))
	$xml = $_GET['XML'];
	
$Params = new SimpleXMLElement($xml);
require_once 'core/Produit.php';
$Produit = new Produit();
$Produits =$Produit->listeByCat($Params->Produit->Categorie);
header('Content-type: text/xml');
include "view/listPdt.php";

	
?>