
<head>
<style type="text/css">
.auto-style1 {
	text-align: right;
}
</style>
</head>

<?php

session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hardstore";



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}



$result = mysqli_query($conn,"SELECT * FROM users Where ismanager = '1'");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
<p class="auto-style1">
<form method="post">
<p class="auto-style5"><button onclick ="window.location.href='isadmin.php';" name="Button5" type="button" value="Go Back" >Go Back</button></p>
</p>

<body>


  
    <div class="container">
      
        
      <h1>Add Manager</h1>
      

      
      <p class="auto-style5"><button onclick ="window.location.href='addmanager.html';" name="Button5" type="button" value="Add Manager" >Add Manager</button></p>
    </div>
  
    <div class="container">
      
        
      <h1>Remove Manager</h1>
      

      
      <p class="auto-style5"><button onclick ="window.location.href='removemanager.html';" name="Button5" type="button" value="Add Manager" >Add Manager</button></p>
    </div>



  </form>
  </body>
</html>