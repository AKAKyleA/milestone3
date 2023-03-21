<?php
   $servername = "127.0.0.1";
   $username = "root";
   $password = "";

    $conn=mysqli_connect($url,$username,$password,"hardstore");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>

