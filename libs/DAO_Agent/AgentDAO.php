<?php

require "D:\Wamp\wamp\www\Airline\libs\DAO_Agent\Agent.php";

  class AgentDAO {

     protected $connect;
     protected $db;

     public function AgentDAO($host, $userName, $pass, $database) {
     	//$this -> connect = mysql_connect("localhost", "root", "Alina_DB");
     	$this -> connect = mysql_connect($host, $userName, $pass);
     	$this -> db = mysql_select_db($database);
     }

     protected function execute($sql) {
     	$res = mysql_query($sql, $this -> connect)
     	       or die(mysql_error());

        if(mysql_num_rows($res) > 0){
        	for($i = 0; $i < mysql_num_rows($res); $i++){
        		$row = mysql_fetch_assoc($res);
        		$agent[$i] = new Agent();


        		$agent[$i] -> setID($row[agent_id]);
        		$agent[$i] -> setLastName($row[lastName]);
        		//$agent[$i] -> setLastName($row[last_name]);
        		$agent[$i] -> setFirstName($row[firstName]);
        		$agent[$i] -> setEmail($row[e_mail]);
        		$agent[$i] -> setPass($row[password]);
        	}
        }
          return $agent;
     }

     public function firstName($email, $pass){
     	$sql = "SELECT last_name FROM agent WHERE e_mail = '$email' AND password = '$pass'";
     	return $this -> execute($sql);
     }
      
  }

?>