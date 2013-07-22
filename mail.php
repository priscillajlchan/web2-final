<?php 

	$name = $_POST["name"];
	$email = $_POST ["email"];
	$message = $_POST ["message"]; 

	if ($_POST["submit"] = "Send") {

	$info = "Here's the confirmation email for ".$name." at this
			address: ".$email.

	$info = wordwrap($message, 70, "\r\n");

	$headers = "From: nobody@gmail.com";

	echo mail("priscillachan__@hotmail.com", "to confirm", $info, $headers); 

	}else{
		
	}

	// create file to write to 

	$file = "dessert.txt"; 

	$handle = fopen($file, "w+") or exit ("cannot open file: ".$file);

	$dessert = [
		"menchies"
		"qoola"
		"yeti"
		"others"
	];

	$data = serialize($dessert);

	fwrite($handle, $data);

	$display = file_get_contents($file);

	$display = unserialize($data);

	// This will create a graph to display the voting results!

//create variable
$votes["choclate"]=15;
$votes["strawherry"]=50;
$votes["vanlila"]=30;

$total = 0; //create the $total form 0, also sets up it as a interger type variable
arsort($votes);//sorts $votes array from hight to low based on values

//loop through the $votes array and assigning $vote to the current item's value
foreach ($votes as $vote) {
	$total += $vote;//$total = $total + $vote;
}

//loop throught the $votes array, 
//ssigning the current item's key to $flawvour
//ssigning the current item's value to $vote
foreach ($votes as $flavour => $vote){
	$perc[$flavour]= round ($vote / $total *100);//create the $perc array, and do assignment to prectage type
}

?>

















?>