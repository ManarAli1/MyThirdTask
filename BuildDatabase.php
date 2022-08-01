//Building database with MySQLi Object-oriented:

<?php
$name = "name";
$number = "number";

// Create connection
$db = new mysqli($name, $number);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $db->error;
}

$db->close();
?>
