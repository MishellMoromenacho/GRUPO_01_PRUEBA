<?php
class trapecio extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;
    private $lado4;
	private $a;
	private $p;
	private $tipo;
  
	
	function __construct($l1,$l2,$l3,$l4){
		$this->tipo = "trapecio";
		$this->lado1=$l1;
        $this->lado2=$l2;
        $this->lado3=$l3;
        $this->lado4=$l4;
	}
	
	public function area(){
		$this->a=(($this->lado1 + $this->lado2)/2*$this->lado2);	
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
		
		public function tipo(){
			$this->tipo=$html;
			$html='<h2>trapecio</h2>';
			echo $html;
		}
}
?>
