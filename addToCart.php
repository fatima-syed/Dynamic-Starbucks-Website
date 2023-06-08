<?php
include("config.php");

//getting product id from url
$id = $_GET['id'];

//adding product to cart table
$result = mysqli_query($mysqli, "INSERT INTO cart (productID, quantity) VALUES ($id, 1) ON DUPLICATE KEY UPDATE quantity = quantity + 1;");
$mysqli->close();

//redirecting to the display page (index.php in our case)
header("Location:$_SERVER[HTTP_REFERER]");
?>