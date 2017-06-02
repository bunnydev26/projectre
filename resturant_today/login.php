<?php
// Start the session
session_start();
?>

<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];
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

    $sql = "SELECT user_id, restaurant, name FROM users where email='$email' and password='$pass'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  if($row = $result->fetch_assoc()) {
    $_SESSION["user_id"] = $row['user_id'];
    $_SESSION["type"] = $row['restaurant'];
    $_SESSION["name"] = $row['name'];
    // echo $_SESSION["type"];
  }
} else {
  echo "Invalid username or password";
}
$conn->close();

 ?>
