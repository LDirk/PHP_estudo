<?php

class Caneta{

	var $modelo; 
	var $cor; 
	var $ponta; 
	var $carga; 
	var $tampada; 

	function rabiscar(){

		// this é o objeto que chamou
		if ($this -> tampada == true) {
			echo "<p>Erro ! Não posso rabiscar"; 
		} else{
			echo "<p> Estou rabiscando... </p>";
		}
		
	}


	function tampar(){
		
		$this->tampada = true; 


	}

		// this é o objeto que chamou 
	function destampar(){
		$this->tampada = false; 
	}
		


}

?>