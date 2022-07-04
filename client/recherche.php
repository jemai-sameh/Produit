<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  
<form action="action/rechercher.php" method="post">
    <div>
        <label  class="form-label" width='5%'>Categorie</label>
            <select name="categorie">
                <?php
                    $cat=array("ordinateurPortable","ordinateurBureau","ordinateurGamer");
                    foreach($cat as $c){
                ?>
                <option value="<?=$c?>"><?=$c?></option>
                <?php
            }
            ?>
</select>        
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </div>
</form>


</body>
</html>