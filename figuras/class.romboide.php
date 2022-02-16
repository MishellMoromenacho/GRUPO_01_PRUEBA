<?php
class romboide extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $altura;

  
	
	function __construct($l1,$l2){
		$this->tipo = "romboide";
		$this->lado1=$l1;
        $this->lado2=$l2;
        $this->altura=$al;
	}
	
	public function area(){
		lado1 * $this->altura;
		return $area;
	}
		
	public function perimetro(){
		($this->lado1 * 2)+ ($this->lado2 * 2);
		return $perimetro;
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
