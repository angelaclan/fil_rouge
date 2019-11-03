<?php
include_once("DatabassAccess.php");
include_once("model/Client.php");

class ClientDataAccess extends DatabassAccess {

    public function findClientById($idClient){
        $resultSet = query ($this->connection, "SELECT* FROM client WHERE id_client=$idClient");
        $foundClient = $this->fetchResult($resultSet);    
        $client = $this->createClientArray($foundClient);

        return $client;
    }

    public function findAllClient(){
        $resultSet = query ($this->connection, "SELECT* FROM client");
        $foundClients = $this->fetchResult($resultSet);
        $clients = $this->creatClientArray($foundClients);

        return $clients;
    }

    public function createClientArray($foundClients){
        $clientArray=[];
        foreach($foundClients as $client){
            $objectclient = new Client();
            $objectclient->setFirstname($client['prenom_client']);
            $objectclient->setLastname($client['nom_client']);
            $objectclient->setEmail($client['email_client']);
            $objectclient->setPassword($client['mot_de_passe_client']);
            array_push($clientArray,$objectclient);
        }
        return $clientArray;

    }

    public function addNewClient($firstname, $lastname, $email, $password){
        $resultSet = $this->query($this->connection, "INSERT INTO client(`nom_client`, `prenom_client`, `email_client`, `mot_de_passe_client`)
                                                      VALUES('$lastname','$firstname', '$email', '$password' )");


        if (!$resultSet) {
            echo "INSERT INTO client(`nom_client`, `prenom_client`, `email_client`, `mot_de_passe_client`)
                  VALUES ('$nom','$prenom', '$email', '$password' )";
            die (mysqli_error($this->connection));  
        }                                            
    }

    public function updateClient($firstname, $lastname, $email, $password){
        $myDB = $this-> connexion();
        $requpdate = "UPDATE employers SET noemp= $noemp, nom='$nom', prenom='$prenom', emploi='$emploi', 
                      sup=$sup, embauche='$embauche', sal= $sal, comm= $comm, noserv= $noserv
                      WHERE noemp= $noemp";
        $resultSet = $this-> query($myDB, $requpdate);
      
        if(! $resultSet) {
            echo $requpdate;
            die (mysqli_error($myDB)); 
        }
    }    

    // if it can find valuename thru GET method then return provided $valuename otherwise stop PHP programe from running
    function getInformationFromGet($valueName){

        if(isset($_GET[$valueName])){
            return $_GET[$valueName];
        }
        die ("GET does not contain information for: " . $valueName);
    }

    // if it can find valuename thru POST method then return provided $valuename otherwise stop PHP programe from running
    function getInformationFromPost($valueName){

        if(isset($_POST[$valueName])){
            return $_POST[$valueName];
        }
        die ("Post does not contain information for: " . $valueName);
    }


}


?>