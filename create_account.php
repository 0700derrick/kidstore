<?php

$first_name = $_POST['first_name'];
$second_name = $_POST['second_name'];
$email = $_POST['email'];


$servername='localhost';
$username='root';
$password='';
$dbname = "kid_store";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }





         $sql = "INSERT INTO user_tb (first_name,second_name,email)
         VALUES ('$first_name','$second_name','$email')";
         
         if (mysqli_query($conn, $sql)) {
            echo "New record has been added successfully !";
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }

         mysqli_close($conn);
        
         ?>