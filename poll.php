<?php

if ($_POST['submit'])
 {
 $value=$_POST['dessert'];
 echo "You chose $value";
 }

$dessert["menchies"]=15;
$dessert["qoola"]=50;
$dessert["bella gelateria"]=25;
$dessert["yeti"]=5;
$dessert["other"]=5;

$total = 0; 
arsort($dessert);

$desserts = $_POST['index.php']

foreach ($dessert as $dess) {
		$total =+ $dess;
	}

	foreach ($dessert as $shop => $dess) {
		$perc[$shop] = round($dess / $total * 10);
	}



	$i = 1;

	foreach ($dessert as $shop => $dess) {

		if($i == 1){
			$first = "pink";
		}else{
			$first = "";
		}

		echo "\t<div class='item".$first."' style ='width: ".$perc[$shop]."%;'>".$perc[$shop]."%</div>\r\n";

		$i++;
	}

	echo "\t<p>Total votes: ".$total."</p>\r\n";	

print_r($_POST);

?>