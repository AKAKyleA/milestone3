<?php
session_start();
$showAlert = false; 
$showError = false; 
$exists=false;

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
    



$firstname = $_POST["firstname"]; 

$ID = $_SESSION['id'];
    
$select= "select * from users where ID='$ID'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);

    $res= $row['ID'];
    if($res === $ID)
    {
   
       $update = "update users set firstname='$firstname' where ID='$ID'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 

        $_SESSION['firstname'] = $firstname;
           /*Successful*/
           header('location:viewinfo.php');
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

