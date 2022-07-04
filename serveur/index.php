<?php
require_once "core/Produit.php";	
$Produit = new Produit();
$Produits=$Produit->listeByCat("ordinateur");

header('Content-type: text/xml');
include "view/listPdt.php";
?>