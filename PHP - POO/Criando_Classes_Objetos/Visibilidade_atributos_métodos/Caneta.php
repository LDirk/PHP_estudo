<?php

class Caneta{

	public $modelo; 
	public $cor; 
	private $ponta; 
	protected $carga; 
	protected $tampada; 

	public function rabiscar(){

		// this é o objeto que chamou
		if ($this -> tampada == true) {
			echo "<p>Erro ! Não posso rabiscar"; 
		} else{
			echo "<p> Estou rabiscando... </p>";
		}
		
	}


	private function tampar(){
		
		$this->tampada = true; 


	}

		
	private function destampar(){
		$this->tampada = false; 
	}
		


}

?>