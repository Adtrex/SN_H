<?php session_start();
 
//collecting Data

$errorCount = 0;
$first_name = $_POST["first_name"] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST["last_name"] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST["email"] != "" ? $_POST['email'] : $errorCount++;
$password = $_POST["password"] != "" ? $_POST['password'] : $errorCount++;
$gender = $_POST["gender"] != "" ? $_POST['gender'] : $errorCount++;
$designation = $_POST["designation"] != "" ? $_POST['designation'] : $errorCount++;
$department = $_POST["department"] != "" ? $_POST['department'] : $errorCount++;

$_SESSION["first_name"] = $first_name;
$_SESSION["last_name"] = $last_name;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
$_SESSION["gender"] = $gender;
$_SESSION["designation"] = $designation;
$_SESSION["department"] = $department;

 

if ($errorCount > 0) {
	//Display proper messages to the user
	//Give more accurate feedback to the user
	 $_SESSION["error"] = "You have " . $errorCount . " errors in your form submission";
	 header("Location: register.php");
}else{
	$userObject =[
		'first_name'=>$first_name,
		'last_name'=>$last_name,
		'email'=>$email,
		'password'=>$password,
		'gender'=>$gender,
		'designation'=>$designation,
		'department'=>$department,

	]
	//Save files in DB)
	file_put_contents($first_name . $last_name . ".json","Hello World. Testing!");
}






//saving Data

//

 