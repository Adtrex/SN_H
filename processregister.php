<?php
 
//collecting Data
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$designation = $_POST["designation"];
$department = $_POST["department"];


$errorArray = [];

//verifying Data

if ($first_name == "") {
	$errorArray = "first_name cannot be blank";
}

if ($last_name == "") {
	$errorArray = "last_name cannot be blank";
}

print_r($errorArray);


//saving Data

//

 