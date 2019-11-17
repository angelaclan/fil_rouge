<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="..\Css\ProduitNotif.css">
    <title>Tableau Produits</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <!-- BOUTON INSERT INTO -->
            <div class="offset-lg-10 col-lg-2">
                <a href="../Formulaires\FormulaireProduit.php?value=insert"><input class="form-control btn-primary" type='button' value='Ajouter Produit'></a>
            </div>
        
            <?php
                include_once(__DIR__.'/../Classes/Produit.php');                
                include_once(__DIR__.'\..\DataAccess/ProduitDataAccess.php');
                $produitDataAccess = new ProduitDataAccess();
                var_dump($produitDataAccess);
            
                // TRAITEMENT UPDATE ET INSERT

                if (isset($_GET['value'])){

                    $action = $_GET['value'];               

                    switch ($action) {
                        case 'insert':
                            if (
                                // !empty($_POST['id_produit'])
                                // && 
                                !empty($_POST['nom_produit'])
                                // && !empty($_POST['id_produit'])
                                // && !empty($_POST['nom_produit'])
                                && !empty($_POST['description_article'])
                                && !empty($_POST['taille_article'])
                                && !empty($_POST['genre_article'])
                                && !empty($_POST['prix_vente'])
                                && !empty($_POST['prix_d_achat'])) {
                               
                                // $id_produit = $_POST['id_produit'];
                                $nom_produit = $_POST['nom_produit'];
                                $description_article = $_POST['description_article'];
                                $taille_article = $_POST['taille_article'];
                                $genre_article = $_POST['genre_article'];
                                $prix_vente = $_POST['prix_vente'];
                                $prix_d_achat = $_POST['prix_d_achat'];
                            
                                $produitDataAccess -> ajouterProduit($nom_produit, $description_article, $taille_article, $genre_article, $prix_vente, $prix_d_achat);
                            }
                            
                        break;                    

                        case 'update':
                            if (!empty($_POST['nom_produit'])
                            && !empty($_POST['description_article'])
                            && !empty($_POST['taille_article'])
                            && !empty($_POST['genre_article'])
                            && !empty($_POST['prix_vente'])
                            && !empty($_POST['prix_d_achat'])
                            && !empty($_POST['id_produit'])) {

                            $nom_produit = $_POST['nom_produit'];
                            $description_article = $_POST['description_article'];
                            $taille_article = $_POST['taille_article'];
                            $genre_article = $_POST['genre_article'];
                            $prix_vente = $_POST['prix_vente'];
                            $prix_d_achat = $_POST['prix_d_achat'];
                            $id_produit = $_POST['id_produit'];
                                
                            $produitDataAccess -> updateProduit($nom_produit, $description_article, $taille_article, $genre_article, $prix_vente, $prix_d_achat, $id_produit);
                            }
                            
                        break;                    

                        case 'delete':
                            $produitDataAccess -> deleteProduit();
                        break;
                        
                        default:           
                    }
                }

                // CREATION DU TABLEAU
                    
                echo "<table class='table table-hover' border='1'>";                 

                    echo"<tr>";                        
                    echo "<th>Nom Produit</th>";
                    echo "<th>Description</th>";
                    echo "<th>Taille</th>";
                    echo "<th>Genre</th>";
                    echo "<th>Prix Vente</th>";
                    echo "<th>Prix d'Achat</th>";
                    echo "<th>ID produit</th>";
                    echo "</tr>";

                    $data = $produitDataAccess -> rechercherTousLesProduits();
                    var_dump($data);
                    
                    // $produitDataAccess1 = new ProduitDataAccess();
                    // $data1 = $produitDataAccess1 -> trouverProduitParNumero($id_produit);
                    // var_dump($data1);

                    // $compteur = new ProduitDataAccess();
                    // $i = $compteur->notification();

                    foreach($data as $objetProduit){
                        echo "<tr>";                  
                        echo "<td>".$objetProduit->getNom_produit()."</td>";                       
                        echo "<td>".$objetProduit->getDescription_article()."</td>";                     
                        echo "<td>".$objetProduit->getTaille_article()."</td>";                     
                        echo "<td>".$objetProduit->getGenre_article()."</td>";                     
                        echo "<td>".$objetProduit->getPrix_vente()."</td>";
                        echo "<td>".$objetProduit->getPrix_d_achat()."</td>";
                        echo "<td>".$objetProduit->getId_produit()."</td>";                       

                            echo "<td><a href='../Formulaires/FormulaireProduit.php?id_produit=".$objetProduit->getId_produit()."&value=update' rel='noopener noreferrer'><input class='form-control btn-success' type='button' value='UPDATE'></a></td>";                                                   
                            echo "<td><a href='TableauProduit.php?id_produit=".$objetProduit->getId_produit()."&value=delete' rel='noopener noreferrer'><input class='form-control btn-danger' type='button' value='DELETE'></a></td>";                        
                        echo "</tr>";
                    }                    
                echo "</table>";
            ?>

            <div class="container">
                <div class="notification-bell">
                    <div class="notification-bell__icon">
                        <img src="\..\Images\bell48.png"> 
                    </div>

                    <div class="notification-bell__badge">
                        <div class="notification-bell__counter">
                            <!-- <?php echo $i ?> -->
                        </div>
                    </div> 
                </div>
            </div>            
        </div>
    </div>    
</body>
</html>