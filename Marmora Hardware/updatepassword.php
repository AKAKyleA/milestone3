

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
    


$password = $_POST["password"]; 
$newpassword = $_POST["newpassword"]; 
$newpswrepeat = $_POST["newpswrepeat"]; 

$ID = $_SESSION['id'];



$select= "select * from users where ID='$ID'";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($result);


    
    $res= $row['ID'];
    if($res === $ID)
    {
   


        $sql = "SELECT * FROM users WHERE ID='$ID' AND password='$password'";
       


        $result2 = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result2) === 1) {

            $row2 = mysqli_fetch_assoc($result2);
            

           



            if ($row2['ID'] === $ID && $row2['password'] === $password) {



                if(($newpassword == $newpswrepeat) && $exists==false) {
    
                    $update = "update users set password='$newpassword' where ID='$ID'";
                  $sql3=mysqli_query($conn,$update);
             if($sql3)
            { 
     
             $_SESSION['password'] = $newpassword;
                /*Successful*/
                header('location:viewinfo.php');
            }
            else
            {
                /*sorry your profile is not update*/
                header('location:Profile_edit_form.php');
            }
                         
                  } 
                  else { 
                      $showError = "Passwords do not match"; 
                  }   








            }else{

                $showError = "Password isn't correct";

            }

        }else{

            $showError = "Password isn't correct";

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