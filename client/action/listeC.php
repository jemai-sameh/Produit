<?xml version="1.0" ?>
<Commandes>
    <?php
        foreach ($Commandes as $c){
    ?>
    <Commande IdC="<?=$c['IdC']?>">
        <Montant><?=$c->Montant?></Montant>
        <CinCl><?=$c->CinCl?></CinCl>
        <Date><?=$c->Date?></Date>
        <Details>
            <?php
                foreach ($c->Details->Detail as $d){

            ?>
            <Detail IdDC="<?=$d['IdDC']?>">
                <Produits>
                    <?php
                    foreach ($d->Produits->Produit as $p){
                    ?>
                    <Produit Code="<?=$p['Code']?>">
                        <Nom><?=$p->Nom?></Nom>
                        <Prix><?=$p->Prix?></Prix>
                        <Quantite><?=$p->Quantite?></Quantite>
                        <Img><?=$p->Img?></Img>
                        <Categorie><?=$p->Categorie?></Categorie>
                        <Description><?=$p->Description?></Description>
                    </Produit>
                    <?php    
                    }
                    ?>
                </Produits>
            </Detail>
            <?php
                }
            ?>
        </Details>
    </Commande>
    <?php
        }
    ?>
</Commandes>