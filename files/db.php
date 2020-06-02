<?php

#$connection = new PDO('mysql:host=db1;dbname=demo', 'demo', 'demo');
#$statement = $connection->query('SELECT message FROM demo');
#echo $statement->fetchColumn();

$servername = "db1";
$username = "demo";
$password = "demo";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Message: " . $row["message"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
