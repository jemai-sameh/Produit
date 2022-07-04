<html>

<head>
    <meta charset="utf-8" />
    <title>Liste des etds</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php

		// CHargement du source XML
		$xml = new DOMDocument;
		$xml->load('http://localhost/gestionProduit/Serveur/');

		$xsl = new DOMDocument;
		$xsl->load('XSLT/xsl.xsl');

		// Configuration du transformateur
		$proc = new XSLTProcessor;
		$proc->importStyleSheet($xsl); // attachement des règles xsl

		echo $proc->transformToXML($xml);

		?>
</body>

</html>