<?php

  $location = $_POST['location'];

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "resturant_today";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO location_type (location)
  VALUES ('$location')";

  if ($conn->query($sql) === TRUE) {
      echo "successfully Added Location";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
 ?>
