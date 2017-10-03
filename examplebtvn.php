<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$ds = array(
    	array(
        	"name" => "phuong nguyen",
        	"year" => "1992",
        	"college" => "graduated"
    	),
    	array(
        	"name" => "nam nguyen",
        	"year" => "1993",
        	"college" => "bach khoa"
    	),
    	array(
        	"name" => "huy duong",
        	"year" => "1993",
        	"college" => "bach khoa"
    	),
    	array(
        	"name" => "quang hoang",
        	"year" => "1994",
        	"college" => "duy tan"
    	),
    	array(
        	"name" => "phong nguyen",
        	"year" => "1995",
        	"college" => "duy tan"
    	),
    	array(
        	"name" => "trung do",
        	"year" => "1993",
        	"college" => "bach khoa"
    	),
    	array(
        	"name" => "quy nguyen",
        	"year" => "1993",
        	"college" => "duy tan"
    	)
	);
	foreach ($ds as $key => $hocvien){
    	echo "Name: " . $hocvien["name"] . "<br/>";
    	echo "Year: " . $hocvien["year"] . "<br/>";
    	echo "College: " . $hocvien["college"] . "<br/>";
	}
	echo "<br>";
	$duy_tan = $ds[0]["college"] . $ds[1]["college"] . $ds[2]["college"] . $ds[3]["college"] . $ds[4]["college"] . $ds[5]["college"] . $ds[6]["college"];
	$name = $ds[0]["name"] . $ds[1]["name"] . $ds[2]["name"] . $ds[3]["name"] . $ds[4]["name"] . $ds[5]["name"] . $ds[6]["name"];
	if ($duy_tan = "duy tan") {
		echo $name[];
	}
	else {
		echo "NO NAME";
	}

	?>
</body>
</html>