

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
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
    


$email = $_POST["email"]; 

$ID = $_SESSION['id'];



$select= "select * from users where ID='$ID'";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($result);


    
    $res= $row['ID'];
    if($res === $ID)
    {
   

        $sql = "Select * from users where email='$email'";
    
        $result2 = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result2); 
        
        // This sql query is use to check if
        // the username is already present 
        // or not in our Database
        if($num == 0) {
            
    
            $update = "update users set email='$email' where ID='$ID'";
            $sql2=mysqli_query($conn,$update);
         if($sql2)
            { 
     
             $_SESSION['email'] = $email;
                /*Successful*/
                header('location:viewinfo.php');
            }
            else
            {
                /*sorry your profile is not update*/
                header('location:Profile_edit_form.php');
            }
    
    
    
        }// end if 
        
       if($num>0) 
       {
          $exists="Email already in use"; 
       } 




       








    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }

















    
    
   $conn->close();


?>


<!doctype html>
    
<html lang="en">
  
<head>
    
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content=
        "width=device-width, initial-scale=1, 
        shrink-to-fit=no">
    
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">  
</head>
    
<body>
    
<?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <p>Go to <a href="login.html">Sign in</a>.</p>
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button  type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
?>