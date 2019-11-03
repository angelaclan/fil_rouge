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

}

?>