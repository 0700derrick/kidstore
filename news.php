<?php

$emails = $_POST['email'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kid_store";

$conn = mysqli_connect ($servername, $username, $password, $dbname);




$sql ="INSERT INTO `subscribe_emails` (`id`, `email`) VALUES (NULL, '$emails')";

mysqli_query($conn, $sql);

 echo '<h1 style="color:blue; text-align:center; margin-top:20%;"> Thank you for subscribing</h1>';

?>

