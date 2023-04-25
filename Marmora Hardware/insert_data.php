<?php

session_start();



                
                    
                    $connection = new mysqli('localhost', 'root', '', 'hardstore');

                    // Check the connection
                    if ($connection->connect_error) {
                        die('Connection failed: ' . $connection->connect_error);
                    }
        
                    if (!empty($_POST['cart'])) {
                        $cart = json_decode($_POST['cart'], true);
                      
                        foreach ($cart as $item) {
                          $name = $item['name'];
                          $price = $item['price'];
                          $quantity = $item['quantity'];
                          
                          // ...
                        }
                      } else {
                        echo "Cart is empty";
                      }





                    $total = $_POST["total"];
                    $summary = '';
foreach ($cart as $item) {
  $summary .= $item['name'] . ' (' . $item['quantity'] . '), ';
}

// Remove trailing comma and space
$summary = rtrim($summary, ', ');

// Example usage
$name = $summary;

                    if (isset($_SESSION['loggedin'])) {

                    $user_id = $_SESSION['id'];
                    }
                    else {
                        $user_id = 0;
                    }

              


                    $tax = $total * 0.0625;
                    $taxtotal = $tax + $total;

  
                    $query = "INSERT INTO sales( total, 
                    items, account_id) VALUES ('$taxtotal', 
                    '$name', '$user_id')";

                    $sql = "INSERT INTO sales( total, 
                    items, account_id) VALUES ('$taxtotal', 
                    '$name', '$user_id')";

echo "Name: $taxtotal<br>";
echo "Name: $name<br>";
echo "Name: $user_id<br>";
echo "Query: $query<br>";
                  
                  $result = mysqli_query($connection, $sql);

                  // Check if the query was successful
                  if ($result) {
                      // If the query was successful, display a success message
                      echo "Sale processed successfully.";
                  } else {
                      // If the query was not successful, display an error message
                      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                  }



                
                ?>