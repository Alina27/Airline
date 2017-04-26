<?php
  
  class Agent {

    protected $id;
    protected $lastName;
    protected $firstName;
    protected $email;
    protected $password;

    public function setID($id) {
    	$this -> id = $id;
    }

    public function getID(){
    	return $this -> id;
    }

    public function setLastName($lastName){
    	$this -> lastName = $lastName;
    }

    public function getLastName(){
    	return $this -> lastName;
    }

    public function setFirstName($firstName){
    	$this -> firstName = $firstName;
    }

    public function getFirstName(){
    	return $this -> firstName;
    }

    public function setEmail($email){
    	$this -> email = $email;
    }

    public function getEmail(){
    	return $this -> email;
    }

    public function setPass($password){
    	$this -> password = $password;
    }

    public function getPass(){
    	return $this -> password;
    }


  }

?>