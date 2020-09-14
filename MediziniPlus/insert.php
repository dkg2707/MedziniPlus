<?php

include 'config.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	console.log("1");
	if( empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty( $_POST["pwd"])	){
		header("location: register.php");
		console.log("2");
	}
	else{
		if( preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST["email"]) && strlen($_POST["pwd"])>=6 ){
            $fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];

			$pwd = md5($_POST["pwd"]);
			console.log("3");
			if($mysqli->query("INSERT INTO users (fname, lname, email, password) VALUES('$fname', '$lname', '$email', '$pwd')")){
				echo 'Data inserted';
				echo '<br/>';

			}
           
        }
        else{
            header("location: register.php");
        }
	

	header ("location:login.php");
	}
}
?>
