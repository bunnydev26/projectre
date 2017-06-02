<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "resturant_today";
    $location = "____---";
    if(!isset($_POST['location'])) {
      $location = $_POST['location'];

    }
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT loc_id, location FROM location_type";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // echo "<tr> <td><span style='display:none;'><input type='hidden' value='"
      // . $row["loc_id"]. "' /></span> <input type='checkbox'></td>";
      // echo '<td>' . $row["location"]. "</td></tr> ";
      if($row['location'] == $location) {
        echo "<option selected>" . $row['location'] . "</option>";
      } else {
        echo "<option>" . $row['location'] . "</option>";
      }
  }
} else {
  echo "0 results";
}
$conn->close();

 ?>
