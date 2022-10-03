<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<title> Primer cuarto </title>
	<link rel="icon" href="img/favicon.png">

</head>
<body>
	<center>
	<h1> PRIMER CUARTO </h1>
	<h1> Elije una puerta </h1>
	<br><br>

	<?php 
	$npuertas = 2;
	$puertacorrecta = rand(0, $npuertas-1);


	for ($i = 0; $i < $npuertas; $i++) {

		if ($i==$puertacorrecta) {
			echo("<a href='2cuarto.php'><div class='puerta'></div></a>");
		}
		else {
			echo("<a href='dead.php'><div class='puerta'></div></a>");
		}

	}

	?>

	</center>
</body>
</html>