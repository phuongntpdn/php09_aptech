<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo "Hello World";
	echo "<br>";
	?>
	<?php
	$x = 18;
	for ($x = 0; $x <= 18; $x++) { 
		if ($x % 2 == 1) {
			echo $x;
		}
	}
	echo "<br>";
	while($x > 10) {
    echo "The number is: $x <br>";
    $x++;
	} 
	echo "<br>";
	do {
    echo "The number is: $x <br>";
	} while ($x > 15);
	$x++;
	?>
</body>
</html>