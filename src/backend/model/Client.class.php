<?php

class Client {
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    public function setFirstname($fisrtname){

        $this->firstname = $fisrtname;
        return $this;
    } 

    public function getFirstname(){
        return $this->firstname;
    }

    public function setLastname($lastname){
        $this->lastname = $lastname;
        return $this;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }
        

}

?>