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
    



$removemanager = $_POST["removemanager"]; 


    
$select= "select * from users where email='$removemanager'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);

    $res= $row['email'];
    if($res === $removemanager)
    {
   
       $update = "update users set ismanager='0' where email='$removemanager'";
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