<?php
$CinCl=(isset($_GET["CinCl"]))?$_GET["CinCl"]:$_POST["CinCl"];
//$Produits=(isset($_GET["Produits"]))?$_GET["Produits"]:$_POST["Produits"];
//$date=date('d-m-y h:i:s');
$xm="<Commandes><Commande><CinCl>$CinCl</CinCl></Commande></Commandes>";
$xml=file_get_contents("http://127.0.0.1/Produit/serveur/reponseC.php?XML=$xm");
$Retour = new SimpleXMLElement($xml);
$Commandes= $Retour->Commande;
//echo "<pre>";var_dump($Commandes);echo "</pre>";
//header('Content-type: text/xml');
//include "listeC.php";
include_once "../../serveur/reponseC.php"
?>