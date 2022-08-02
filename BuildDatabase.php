//Building database with MySQLi Object-oriented:

<<?php
  $num = "number";

  // Create connection
  $db = new mysqli($num);
  // Check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  // Create database
  $sql = "CREATE DATABASE MyDB";
  if ($db->query($sql) === TRUE) {
    echo "Database created successfully";
  } 
  else {
    echo "Error creating database: " . $db->error;
  }

  $db->close();
?>
