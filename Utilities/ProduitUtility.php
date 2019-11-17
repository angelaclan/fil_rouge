<?php
    include_once(__DIR__.'\..\Classes/Produit.php');         

    class ProduitUtility
    {
        public function creerTableauObjets($produit){
            
            $tableau=[];
            foreach($produit as $ligneProduit){

                $objetProduit = new Produit();

                $objetProduit->setNom_produit($ligneProduit['nom_produit']);
                $objetProduit->setDescription_article($ligneProduit['description_article']);
                $objetProduit->setTaille_article($ligneProduit['taille_article']);
                $objetProduit->setGenre_article($ligneProduit['genre_article']);
                $objetProduit->setPrix_vente($ligneProduit['prix_vente']);
                $objetProduit->setPrix_d_achat($ligneProduit['prix_d_achat']);
                $objetProduit->setId_produit($ligneProduit['id_produit']);
        
                array_push($tableau,$objetProduit);                
            }
            return $tableau;
        }
    }        
?>