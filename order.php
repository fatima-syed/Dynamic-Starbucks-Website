<?php
include("config.php");

//adding product to cart table
if(isset($_GET['Submit'])) {
	$firstName = mysqli_real_escape_string($mysqli, $_GET['fname']);
	$lastName = mysqli_real_escape_string($mysqli, $_GET['lname']);
	$email = mysqli_real_escape_string($mysqli, $_GET['email']);
		
    $name = $firstName." ".$lastName;
    $date = date_format(date_create(date("Y-m-d")),"F").date(" d, Y");
    echo $name;
    echo $date;
    echo $email;

	//insert into order table	
	$result = mysqli_query($mysqli, "INSERT INTO orders (name, email, date) VALUES ('$name', '$email', '$date');");
	$mysqli->close();
}

header("Location:$_SERVER[HTTP_REFERER]");
?>