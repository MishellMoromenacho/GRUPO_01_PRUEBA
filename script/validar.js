
function habilitar(Formulario) {
	var input1 = Formulario.lado_1
	var input2 = Formulario.lado_2
	var input3 = Formulario.lado_3
	var input4 = Formulario.lado_4
	var altura = Formulario.altura
	var TipoFigura = Formulario.tipo.value;
	
	//alert("EJECUNTANDO JavaScript");	
	 
	if(TipoFigura == "rombo"){
		input1.disabled = false;
		input2.disabled = true;
		input3.disabled = true;
		input4.disabled = true;
		altura.disabled = false;
	}else{
		if(TipoFigura == "romboide"){
			input1.disabled = false;
			input2.disabled = false;
			input3.disabled = true;
			altura.disabled = false;
		}else{
				if(TipoFigura == "trapecio"){
					input1.disabled = false;
					input2.disabled = false;
					input3.disabled = false;
					input4.disabled = false;
				}else{
					if(TipoFigura == "sel"){
					input1.disabled = true;
					input2.disabled = true;
					input3.disabled = true;
					input4.disabled = true;}
				}
				
			}
		}
	  }
