<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<title> Cuarto cuarto </title>
	<link rel="icon" href="img/favicon.png">

</head>
<body>
	<center>
	<h1> CUARTO CUARTO </h1>
	<h1> Elije una puerta </h1>
	<br><br>

	<?php 
	$npuertas = rand(6,12);
	$puertacorrecta = rand(0, $npuertas-1);
	$puertaback = rand(0, $npuertas-1);


	while ($puertaback!=$puertacorrecta) {
		$puertaback = rand(0, $npuertas-1);
		if ($puertaback==$puertacorrecta) {
			continue;
		}
	break;
	}


	for ($i = 0; $i < $npuertas; $i++) {

		if ($i==$puertacorrecta) {
			echo("<a href='final.php'><div class='puerta'></div></a>");
		}
		elseif ($i==$puertaback) {
			echo("<a href='3cuarto.php'><div class='puerta'></div></a>");
		}
		else {
			echo("<a href='dead.php'><div class='puerta'></div></a>");
		}
	}

	?>

	</center>
</body>
</html>