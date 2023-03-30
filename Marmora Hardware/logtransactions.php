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



$result = mysqli_query($conn,"SELECT * FROM transactions ");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Date</th>
<th>Items</th>
<th>items</th>
<th>Amount</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['num_items'] . "</td>";
echo "<td>" . $row['items'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";
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
      
        
      <h1>Add Transcation</h1>
      

      
      <p class="auto-style5"><button onclick ="window.location.href='addtransaction.html';" name="Button5" type="button" value="Add Transaction" >Add Transaction</button></p>
    </div>
  
    <div class="container">
      
        
      <h1>Remove Transaction</h1>
      

      
      <p class="auto-style5"><button onclick ="window.location.href='removetransaction.html';" name="Button5" type="button" value="Remove Transaction" >Remove Transaction</button></p>
    </div>

    <div class="container">
      
        
      <h1>Edit Transaction</h1>
      

      
      <p class="auto-style5"><button onclick ="window.location.href='edittransaction.html';" name="Button5" type="button" value="Edit Transaction" >Edit Transaction</button></p>
    </div>

  </form>
  </body>
</html>