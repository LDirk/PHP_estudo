<?php 

class ContaBanco{

	// Atributos 
	public $numConta; 
	protected $tipo; 
	private $dono; 
	private $saldo; 
	private $status; 

	//Métodos
	public function abrirConta($t){
		$this->setTipo($t); 
		$this->setStatus(true);

		if ($t == "CC"){
			$this->setSaldo(50);
		}

		elseif ($t == "CP"){
			$this->setSaldo(150);
		}
	}	


	public function fecharConta(){

		if ($this->getSaldo()>0){
			echo "<p>Conta ainda com dinheiro, não pode fechar </p>";
		}

		elseif ($this->getSaldo()<0){
			echo "<p>Conta está em debito, não pode fechar</p>"; 
		}

		else {
			$this->setStatus(false);
		}
	}

	public function depositar($v){
		if ($this->getStatus()){
			$this->setSaldo($this->getSaldo()+$v);
		}

		else{
			echo "<p>Conta Fechada</p>";
		}

	}

	public function sacar($v){
		if ($this->getStatus()){
			if ($this->getSaldo() >=$v){
				$this->setSaldo($this->getSaldo() - $v);
			}
			else{
				echo "<p>Saldo insuficiente para saque </p>";
			}
		}

		else {
			echo "<p>Conta Fechada</p>";
		 }

	}




	public function pagarMensal(){

		if ($this->getTipo()=="CC"){
			$v = 12; 
		}

		elseif ($this->getTipo()=="CP"){
			$v = 20; 
		}

		if ($this->getStatus()){
			$this->setSaldo($this->getSaldo() - $v); 
		}

		else{
			echo "<p>Problemas com o tipo de conta</p>"; 
		}

	}


	// Métodos especiais. 

	public function __construct(){
		$this->setSaldo(0);
		$this->setStatus(false); 
		echo "<p>Conta criada com sucesso</p>";

	}

	public function getnumConta(){
		return $this->numConta; 
	}


	public function getTipo(){
		return $this->tipo;

	}

	public function getDono(){
		return $this->dono;
	}

	public function getSaldo(){
		return $this->saldo; 

	}

	public function getStatus(){
		return $this->status; 

	}

	public function setNumConta($numConta){
		$this->numConta = $numConta; 
	}

	public function setTipo($tipo){
		$this->tipo = $tipo; 	
	}

	public function setDono($dono){
		$this->dono = $dono; 
		
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo; 
		
	}

	public function setStatus($status){
		$this->status = $status; 
	}

}
?>