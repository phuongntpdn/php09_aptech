<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$name = array("phuong nguyen", "nam nguyen", "huy duong", "quang hoang", "phong nguyen", "trung do", "quy nguyen");
	$year = array("phuong nguyen"=>"1991", "nam nguyen"=>"1992", "huy duong"=>"1993", "quang hoang"=>"1994", "phong nguyen"=>"1995", "trung do"=>"1993", "quy nguyen"=>"1994");
	$gender = array("male", "female");
	$college = array("nam nguyen"=>"bach khoa", "huy duong"=>"duy tan", "quang hoang"=>"cong nghe tt", "phong nguyen"=>"bach khoa", "trung do"=>"duy tan", "quy nguyen"=>"duy tan", "phuong nguyen"=>"graduated");
	echo "HỌ NGUYỄN";
	echo "<br>";
	$search_ho = $name[0]."<br>".$name[1]."<br>".$name[4]."<br>".$name[6];
	echo $search_ho;
	echo "<br>";
	echo "<br>";
	echo "SẮP XẾP THỨ TỰ";
	echo "<br>";
	sort($name);
	$clength = count($name);
	for($x = 0; $x < $clength; $x++) {
    echo $name[$x];
    echo "<br>";
	}
	?>
</body>
</html>