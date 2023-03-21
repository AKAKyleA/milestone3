<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hardstore";
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
    



$addmanager = $_POST["addmanager"]; 


    
$select= "select * from users where email='$addmanager'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);

    $res= $row['email'];
    if($res === $addmanager)
    {
   
       $update = "update users set ismanager='1' where email='$addmanager'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 

        
           /*Successful*/
           header('location:setmanager.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 

?>