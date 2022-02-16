<?php
class romboide extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;
    private $lado4;
	private $altura;
  
	
	function __construct($l1,$l2,$l3,$l4,$al){
		$this->tipo = "romboide";
		$this->lado1=$l1;
        $this->lado2=$l2;
        $this->lado3=$l3;
        $this->lado4=$l4;
        $this->altura=$al;

	}
	
	public function area(){
		$this->a=($this->lado4*$altura);	
	}
		
	public function perimetro(){
		$this->p=($this->lado1 +$this->lado2 + $this->lado3 + $this->lado4 );
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

