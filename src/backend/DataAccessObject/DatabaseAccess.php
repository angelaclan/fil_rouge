<?php

class DatabassAccess {
    private $connection;

    function __construct(){
        $this->connection = mysqli_init();
        mysqli_real_connect($this->connection, "localhost", "root", "", "fil_rouge");
        return $this;
    }
    
    protected function query($req){
        return mysqli_query($this->connection, $req);
    }
    
    protected function fetchResults($resultSet){
        return mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
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