<?php

class Seats extends SplQueue{

  protected $queue;

  public function __construct(){
  	$this -> queue = array();
  }

  public function enqueue($item){
  	array_unshift($this -> queue, $item);
  }

  public function dequeue(){
  	if($this -> isEmpty()){
  		throw new RunTimeException('Queue is full!');
  	}
  	else {
  		return array_pop($this -> queue);
  	}
  }
   
  public function isEmpty(){
  	return empty($this -> queue);
  }
   
}

?>