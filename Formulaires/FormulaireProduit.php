<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit</title>
</head>
<body>
        
    <!-- FORMULAIRE INSERT ET UPDATE -->


    <form action="../Template/TableauProduit.php?value=<?php echo $_GET['value'] ?>" method="post">

        <?php
            include_once(__DIR__.'\..\DataAccess\ProduitDataAccess.php');
            include_once(__DIR__.'\..\Classes\Produit.php');            
                
                
            if ($_GET['value']=='insert') {                    
                $action = 'insert';
                $data = '';
            }
            else {
                $action = 'update';
                $objetProduit = new ProduitDataAccess();
                $data = $objetProduit -> trouverProduitParNumero($_GET['id_produit']);        
            }
        ?>
    
        <div id="formulaire">
            <div class="form-group">
                <label for="">Saisir données</label> <br>
            </div>
    
            <div class="form-group">
                <?php $id_produit = $data ? $data[0]['id_produit'] : '';?>
                <label class="form-control btn-primary text-center" for="id_produit">ID produit</label>
                <input class="form-control" readonly type="number" name="id_produit" id="id_produit" value="<?php echo $id_produit ?>"> <br>
            </div>
    
            <div class="form-group">
                <?php $nom_produit = $data ? $data[0]['nom_produit'] : '';?>
                <label class="form-control btn-primary text-center" for="nom_produit">Nom produit</label>
                <input class="form-control" type="text" name="nom_produit" id="nom_produit" value="<?php echo $nom_produit ?>"> <br>
            </div>
    
            <div class="form-group">
                <?php $description_article = $data ? $data[0]['description_article'] : '';?>
                <label class="form-control btn-primary text-center" for="description_article">Description Article</label>
                <input class="form-control" type="text" name="description_article" id="description_article" value="<?php echo $description_article ?>"> <br>
            </div>

            <div class="form-group">
                <?php $taille_article = $data ? $data[0]['taille_article'] : '';?>
                <label class="form-control btn-primary text-center" for="taille_article">Taille Article</label>
                <input class="form-control" type="number" name="taille_article" id="taille_article" value="<?php echo $taille_article ?>"> <br>
            </div>    
    
            <div class="form-group">
                <?php $genre_article = $data ? $data[0]['genre_article'] : '';?>
                <label class="form-control btn-primary text-center" for="genre_article">genre Article</label>
                <input class="form-control" type="text" name="genre_article" id="genre_article" value="<?php echo $genre_article ?>"> <br>
            </div>    
    
            <div class="form-group">
                <?php $prix_vente = $data ? $data[0]['prix_vente'] : '';?>
                <label class="form-control btn-primary text-center" for="prix_vente">Prix de vente</label>
                <input class="form-control" type="number" name="prix_vente" id="prix_vente" value="<?php echo $prix_vente ?>"> <br>
            </div>
        </div>
            <div class="form-group">
                <?php $prix_d_achat = $data ? $data[0]['prix_d_achat'] : '';?>
                <label class="form-control btn-primary text-center" for="prix_d_achat">Prix d'achat</label>
                <input class="form-control" type="number" name="prix_d_achat" id="prix_d_achat" value="<?php echo $prix_d_achat ?>"> <br>
            </div>
        </div>

        <div class="form-group">
            <input class="form-control btn-success" name="addProduit" type="submit" value="Enregistrer">
        </div>
    </form>
</body>
</html>