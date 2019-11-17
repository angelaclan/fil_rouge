<?php
    include_once(__DIR__.'\..\Utilities\ProduitUtility.php');
    include_once('DataAccess.php');

    class ProduitDataAccess extends DataAccess {

        // Méthodes 

        public function rechercherTousLesProduits(){
            $myDb = $this->connection();
            $resultSet = $this->executerQuery($myDb, "SELECT * From produit");
            $produit = $this->fetchResults($resultSet);

            $produitUtility = new ProduitUtility();
            
            $tableauObjetProduits = $produitUtility -> creerTableauObjets($produit);
            return $tableauObjetProduits;
        }

        public function trouverProduitParNumero($id_produit){
            $myDb = $this->connection();
            $resultSet = $this->executerQuery($myDb, "SELECT * FROM produit
                                                        WHERE id_produit = $id_produit");
            $produit = $this->fetchResults($resultSet);
            return $produit;
        }

        public function ajouterProduit($nom_produit='', $description_article='', $taille_article='', $genre_article='', $prix_vente='', $prix_d_achat='')
        {
            // header('Location : TableauProduit.php');
            $myDb = $this->connection();
            
            // Request Declaration
            $requete = "INSERT INTO produit (nom_produit, description_article, taille_article, genre_article, prix_vente, prix_d_achat)
            VALUES (?,?,?,?,?,?)";

            // Request Preparation
            $statement = $myDb -> prepare($requete);

            // Bind the pamameters
            $statement -> bind_param("ssisii", $nom_produit, $description_article, $taille_article, $genre_article, $prix_vente, $prix_d_achat);

            // Request Execution
            $statement -> execute();

            $myDb -> close();            
        }        

        public function updateProduit($nom_produit='', $description_article='', $taille_article='', $genre_article='', $prix_vente='', $prix_d_achat='', $id_produit='')
        {
            $myDb = $this->connection();

            // Request Declaration
            $requete = "UPDATE produit
            SET nom_produit=?, description_article=?, taille_article=?, genre_article=?, prix_vente=?, prix_d_achat=?
            WHERE id_produit=?";

            // Request Preparation
            $statement = $myDb -> prepare($requete);

            // Bind the pamameters
            $statement -> bind_param("ssisiii",$nom_produit, $description_article, $taille_article, $genre_article, $prix_vente, $prix_d_achat, $id_produit);

            // Request Execution
            $statement -> execute();

            $myDb -> close();
        }

        public function deleteProduit()
        {
            $myDb = $this->connection();

            // Request Declaration
            $requete = "DELETE FROM produit
            WHERE id_produit =?";

            // Request Preparation
            $statement = $myDb -> prepare($requete);

            // Bind the pamameters
            $statement -> bind_param("i",$_GET['id_produit']);

            // Request Execution
            $statement -> execute();

            $myDb -> close();
        }
    }

?>