<html>
	<body>

	<h1>My First PHP page</h1>

	<?php
	
	//This is single - line comment
	/*
	This is a multiple - lines comment block
	that spans over multiple 
	line
	*/
	
	echo "Hello World! <br>";
	ECHO "Hello World! <br>";
	EcHo "Hello World! <br>";
	// You can also use comment to leave out part of code line
	$x = 5 /* + 15 */ + 5;
	echo $x;
	
	$color = "red";
	echo "<br> My car is " . $color . "<br>";
	
	$y = 10; 
	$z = 15;
	$hasil = $y + $z;
	
	echo $hasil;
	echo " <br> Output :";
	echo strlen("Hello Someone");
    echo " <br> Output :";
	echo strrev("Hello Someone");
	?>

	</body>
</html>