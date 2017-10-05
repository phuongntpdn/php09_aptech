<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo "Hello World";
	echo "<br>";
	echo "<br>";
	?>
	<?php
	$x = 18;
	//chia het cho 3
	for ($x = 0; $x <= 18; $x++) { 
		if ($x % 2 == 1) {
			echo $x;
		}
	}
	echo "<br>";
	echo "<br>";
	//kiem tra n>10
	while($x > 10) {
    echo "The number is: $x <br>";
    $x--;
	} 
	echo "<br>";
	echo "<br>";
	//kiem tra n>15
	do {
    echo "The number is: $x <br>";
	} while ($x > 15);
	$x--;
	echo "<br>";

	/*
	*reverseName function
	*created by phuongntp
	*created on 10/03/17
	*/
	function reverseName($name){
		$change = explode(" ", $name);
		echo $change[0]." ". $change[2]." ".$change[1];
	}
	reverseName("nguyen thanh phuong");
	//cach 2:
	function reverseName ($hoten){
		$sapxep = explode(" ", $hoten);
		$leng = count($sapxep);
		$lastnamepo = $leng;
		$lastname = $sapxep[$lastnamepo -1];
		$midname = $sapxep[$lastnamepo -2];
		$other = "";
		for ($i=0; $i < $leng -2; $i++) { 
			$other .= $sapxep[$i]." ";
		}
		echo $other.$lastname." ".$midname;
	}	
	reverseName("tran van a");	
	?>

</body>
</html>