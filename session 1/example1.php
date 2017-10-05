<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	echo "Hello World";
	?>
<br>
	<?php
	$numberone = 3;
	$numbertwo = 5;
	echo $numberone + $numbertwo;
	echo "<br>";
		if ($numberone > $numbertwo) {
			echo "true";
		} else if ($numberone <= $numbertwo) {
			echo "false";
		}
	?>
<br>
	<?php
	$x = "thanh phuong";
	echo strpos("thanh phuong", "a");
	echo "<br>";
	echo strlen ($x);
	echo "<br>";
	echo str_word_count($x);
	echo "<br>";
	echo str_replace("thanh", "php09","thanh phuong");
	echo "<br>";
	echo strrev("thanh phuong");
	echo "<br";
	?>
<br>
<br>
	<?php
	define("php09", "say hello");
	echo php09;
	?>
<br>
	<?php
	$number = 3;
	$languae = "en";
	$viet = array("thu hai", "thu ba", "thu tu", "thu nam", "thu sau", "thu bay", "chu nhat"); 
	$eng  = array("mon", "tue", "wed", "thu", "fri", "sat", "sun");
	$day = array();
	if ($languae == "vn") {
		$day = $viet;
	}
	else{
		$day = $eng;
	}
	switch ($number) {
		case 2:
			echo $day[0];
			break;
		case 3:
			echo $day[1];
			break;
		case 4:
			echo $day[2];
			break;	
		case 5:
			echo $day[3];
			break;	
		case 6:
			echo $day[4];
			break;
		case 7:
			echo $day[5];
			break;	
		case 8:
			echo $day[6];
			break;
		default:
			# code...
			break;
	}

	?>
</body>
</html>
