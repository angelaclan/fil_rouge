<?php

include_once("DataAccessObject/ClientDataAccess.php");

if(isset($_POST)){
    $clientInformation = new ClientDataAccess();
    $firstname = $clientInformation->getInformationFromPost ('prenom_client');
    $lastname = $clientInformation->getInformationFromPost ('nom_client');
    $email = $clientInformation->getInformationFromPost ('email_client');
    $password = $clientInformation->getInformationFromPost ('mot_de_passe_client');

    $clientInformation->addNewClient($firstname, $lastname, $email, $password);
    echo $clientInformation;
}

header("Location: homepage.php");


?>