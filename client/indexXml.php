<html>

<head>
    <meta charset="utf-8" />
    <title>Liste des Produit Par Categorie</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $XML = file_get_contents("http://localhost/gestionProduit/serveur/");
    $Rows = new SimpleXMLElement($XML);
    //var_dump($Rows);
    //exit;
    ?>
    <table border="1" width="80%" class="table table-striped">
        <tr>
            <th colspan="3">Categorie</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nom Categorie</th>
            <th>Produits</th>
        </tr>

        <?php

        $Categories = $Rows->Categorie;
        foreach ($Categories as $c) {
                    ?>



            <tr>
                <td>
                    <?php echo $c['Id']; ?>
                </td>
                <td>
                    <?php echo $c->NomCategorie; ?>
                </td>
                <td>
                    <?php 
                        if(count($c->Produits->Produit)==0){
                                echo "Aucun Produit";
                        }else{
                    ?>
                    <table border="1" class="table table-striped">
                        <tr>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Quantite</th>
                            <th>Image</th>
                            <th>Description</th>
                        </tr>
                        <?php
                        foreach ($c->Produits->Produit as $pdt) {

                        ?>

                            <tr>
                                <td>
                                    <?php echo $pdt['Code']; ?>
                                </td>
                                <td>
                                    <?php echo $pdt->Nom; ?>
                                </td>
                                <td>
                                    <?php echo $pdt->Prix; ?>
                                </td>
                                <td>
                                    <?php echo $pdt->Quantite; ?>
                                </td>
                                <td>
                                    <?php echo $pdt->Img; ?>
                                </td>
                                <td>
                                    <?php echo $pdt->Description; ?>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                        }
                        ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>