
<?php

session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "hardstore";



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}








if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";
       


        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
            

           



            if ($row['email'] === $uname && $row['password'] === $pass) {



                if (!empty($_POST["remember"]))
            {
  
                // Username is stored as cookie for 10 years as
                // 10years * 365days * 24hrs * 60mins * 60secs
                setcookie("email", $uname, time() +
                                    (10 * 365 * 24 * 60 * 60));
  
                // Password is stored as cookie for 10 years as 
                // 10years * 365days * 24hrs * 60mins * 60secs
                setcookie("password", $password, time() +
                                    (10 * 365 * 24 * 60 * 60));
  
                // After setting cookies the session variable will be set
                
  
            }
            else
            {
                if (isset($_COOKIE["email"]))
                {
                    setcookie("email", "");
                }
                if (isset($_COOKIE["password"]))
                {
                    setcookie("password", "");
                }
            }



                echo "Logged in!";


                $_SESSION['isAdmin'] = $row['isAdmin'];
                $_SESSION['isManager'] = $row['isManager'];
                $_SESSION['isEmployee'] = $row['isEmployee'];

                $_SESSION['id'] = $row['ID'];

                $_SESSION['email'] = $row['email'];

                $_SESSION['firstname'] = $row['firstname'];

                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['loggedin'];

                header("Location: account.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();
    $conn->close();

}