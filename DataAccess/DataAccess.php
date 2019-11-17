<?php
    class DataAccess
    {
        //  Connexion pure et simple à la base de données
        protected function connection(){
            $db = mysqli_init();
            mysqli_real_connect($db, 'localhost','root','','fil_rouge');
            return $db;
        }

        // Exécution de la requête
        protected function executerQuery($myDb,$query){
            return mysqli_query($myDb,$query);            
        }

        // Récupération de la base dans un tableau associatif
        protected function fetchResults($resultSet){
            return mysqli_fetch_all($resultSet,MYSQLI_ASSOC);
        }
    }
    
?>