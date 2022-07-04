<?xml version="1.0" ?>
    <Produits>
        <?php
            foreach ($Produits as $p){
        ?>
        <Produit Code="<?=$p['Code']?>">
            <Nom><?=$p['Nom']?></Nom>
            <Prix><?=$p['Prix']?></Prix>
            <Quantite><?=$p['Quantite']?></Quantite>
            <Img><?=$p['Img']?></Img>
            <Categorie><?=$p['Categorie']?></Categorie>
            <Description><?=$p['Description']?></Description>
        </Produit>
        <?php
            }
        ?>
    </Produits>
