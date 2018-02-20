<!DOCTYPE html>
<head>
<title>TEST</title>
</head>
<body>
<center>
	<h1>TEST 1</h1>
	<br>
	<h1>Temp:</h1>
	<span id=tempValue>none</span>
</center>
<script>
	
	var temp;
	
	function main() {
		if(cpf){
			temp = cpf.get("a0");
			document.getElementById("tempValue").innerHTML = temp;
			
		}
		setTimeout(main, 1000);
	}
	
	function setup() {
		cpf.setPinMode('["resetPin"],["setPinMode", "analog", 0,"INPUT"]');
		
	}
	
	setup();
	main();
	
</script>
	<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "CPF";

        $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	

	mysqli_close( $conexion );
	?>
</body>
</html>
