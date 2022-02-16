<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/validar.js"></script>
</head>
<body>

	<?php

		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.trapecio.php");
		include("figuras/class.rombo.php");
		include("figuras/class.romboide.php");

		if(isset($_POST['calcular'])){
			switch($_POST['tipo']){
				case "trapecio": $f = new trapecio($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4']);break;
				case "rombo": $f = new rombo($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4'],$_POST['altura']);break;
				case "romboide": $f = new romboide($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4'],$_POST['altura']);
			}
			mostrar($f);
		}else{
			echo figura::get_form();
		}
		
		
		function mostrar(formulas $fig){
			$fig->area();
			$fig->perimetro();
			echo "El área del " . $fig->GetTipo() . " es: " . $fig->GetArea();
			echo "<br>El perímetro del " . $fig->GetTipo() . " es: " . $fig->GetPerimetro();
		}
	?>
	
</body>

</html>
