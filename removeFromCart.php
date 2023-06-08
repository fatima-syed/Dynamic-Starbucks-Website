<?php
include("config.php");

//getting product id from url
$id = $_GET['id'];

//adding product to cart table
$result = mysqli_query($mysqli, "DELETE FROM cart WHERE productID = '$id';");
$mysqli->close();

//redirecting to the display page (index.php in our case)
header("Location:$_SERVER[HTTP_REFERER]");
?>