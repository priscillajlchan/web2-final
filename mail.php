<?php 

	$to = "priscillachan__@hotmail.com";
	$subject = "HTML email";

	$name = $_POST["name"];
	$email = $_POST ["email"];
	$message = $_POST ["message"]; 

	$info = "Here's the confirmation email for ".$name." at this
			address: ".$email.

	var_dump($_POST);

	$info = wordwrap($info, 70, "\r\n");

	$headers = "From: nobody@gmail.com";

	echo mail($email, "to confirm", $info, $headers); 



	// // create file to write to 

	// $file = "dessert.txt"; 

	// $handle = fopen($file, "w+") or exit ("cannot open file: ".$file);

	// $dessert = [
	// 	"menchies"
	// 	"qoola"
	// 	"yeti"
	// 	"bella gelateria"
	// 	"others"
	// ];

	// $data = serialize($dessert);

	// fwrite($handle, $data);

	// $display = file_get_contents($file);

	// $display = unserialize($data);

	// $total = 0;

	// arsort($dessert);

	// // print_r($display);



?>
