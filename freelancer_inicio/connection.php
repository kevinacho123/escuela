<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test_kevin";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$query = sprintf("SELECT * FROM products");

$result = $conn->query($query);

while ($row = mysqli_fetch_array($result)) {

    echo "ID:" .$row{'id'}." Name:".$row{'name'}." Price: ". $row{'price'}." Description: ". $row{'description'}."<br>";

}

?>