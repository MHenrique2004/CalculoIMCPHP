<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Resultado IMC</title>
</head>
<body>
<?php
	if (isset($_POST['peso']) && isset($_POST['altura'])) {
		$peso = $_POST['peso'];
		$altura = $_POST['altura'];
		$imc = $peso / ($altura * $altura);
		echo "<input type='text' class='form-control col-6 mx-auto' value =".$imc.">";
	}
	?>
</body>
</html>