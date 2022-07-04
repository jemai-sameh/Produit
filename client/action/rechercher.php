<?php
$categorie=(isset($_GET["categorie"]))?$_GET["categorie"]:$_POST["categorie"];
$xm="<Produits><Produit><Categorie>$categorie</Categorie></Produit></Produits>";
$xml=file_get_contents("http://127.0.0.1/Produit/serveur/reponseCat.php?XML=$xm");
$Retour = new SimpleXMLElement($xml);
$Produits= $Retour->Produit;
//echo "<pre>";var_dump($Produits);echo "</pre>";

header('Content-type: text/xml');
include "listPdt.php";
/*$categorie=$_POST["categorie"];
echo "kll" .$categorie."<br>";
$xm="<Produits><Produit><Categorie>$categorie</categorie></Produit> </Produits>";
$postRequest = array(
    'XML' => $xm
);
var_dump($postRequest);

echo "**********************l";

$cURLConnection = curl_init('http://localhost/Produit/serveur/reponseCat.php');

echo "**********************l";

curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
echo "**********************l";

$apiResponse = curl_exec($cURLConnection);
echo $apiResponse;
curl_close($cURLConnection);
//header('Content-type: text/xml');
//include "../serveur/view/listPdt.php";

$Retour = new SimpleXMLElement($apiResponse);
var_dump($Retour);
$Produits = $Retour->Produits->Produit;
//$NbPAx = $_POST['Adultes'] + $_POST['Enfants'] + $_POST['Bebes'];
require_once 'View/liste.php';*/
?>