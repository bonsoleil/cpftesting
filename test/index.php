<!DOCTYPE html>
<head>
	<title> CPF - 6ÈME</title>
</head>
<body>
<center>
	<h1>6ème CPF v1</h1>
	<br>
	<h1>Temperature Sensor</h1>
	<span id="tempvalue">none</span>
</center>

<script>

var temp;
var tempconverted;

	function toCelsius(value) {
		var resistance = parseFloat((1023-value) * 10000 / value);
		var temperature = 1 / (Math.log(resistance / 10000) / 3975+1 / 298.15) - 273.15;

		return temperature.toFixed(2);
	}

	function main(){
		if (cpf){
			temp = cpf.get("temperature sensor");
			tempconverted = toCelsius(temp);
			document.getElementById("tempvalue").innerHTML = tempconverted;
		}
		setTimeout(main, 1000);
	}

	function setup(){
		if (cpf) {
			cpf.setPinMode('["resetPin"],["setPinMode", "analog", 0, "INPUT"]');
		}
	}

		setup();
		main();
	</script>
</body>
</html>
