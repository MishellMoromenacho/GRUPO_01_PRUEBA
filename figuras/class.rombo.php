<?php
class rombo extends figura implements formulas {
	private $lado1;
	private $altura;
	
	function __construct($l1){
		$this->tipo = "rombo";
		$this->lado1=$l1;
		$this->altura=$al;
	}
	
	public function area(){
		$this->a=($this->lado1 * $this->lado1);	
	}
		
	public function perimetro(){
		$this->p=($this->lado1 * 4);
	}
	
	// METODOS IMPLEMENTADOS
	 public function GetArea(){
			return $this->a;
	    }
	    
	 public function GetPerimetro(){
			return $this->p;
	    }
	    
	    public function GetTipo(){
			return $this->tipo;
	    }  
	
}
?>
