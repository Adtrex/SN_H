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
	$errorArray = "first_name cannot be empty";
}
print_r($errorArray);


//saving Data

//

 