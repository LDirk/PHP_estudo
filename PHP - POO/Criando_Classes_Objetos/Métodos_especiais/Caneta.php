<?php
class Caneta{

	public $modelo; 
	private $ponta; 
	private $tampada; 
	private $cor;

	public function __construct(){  //Pode por o nome da classe em vez de __construct{

		// Posso entrar com o valor dos atributos dentro do construtor.
		// exemplo 
		// _construct($c)
		// $this->cor = $c
		// na hora de criar $c1 = new Caneta($c);


		$this->cor = "Azul"; 
		$this->tampar();

	}

	public function tampar(){
		$this->tampada = true; 
	}


	public function getModelo(){
		return $this ->modelo; 
	}

	public function setModelo($m){
		$this->modelo = $m; 
	}

	public function getPonta(){
		return $this ->ponta; 
	}

	public function setPonta($p){
		$this ->ponta = $p;
	}

}
?>