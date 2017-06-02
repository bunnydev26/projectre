<?php

  $type = $_POST['type'];
  $fname = $_POST['fname'];
  // $uname = $_POST['uname'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  // $ = $_POST['name'];
  $mobile = $_POST['mobile'];
  $location = $_POST['location'];
  $address = $_POST['address'];

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

  $sql = "INSERT INTO users (restaurant, name, email, password, mobile, location, address)
  VALUES ('$type','$fname','$email','$pass','$mobile','$location','$address')";

  if ($conn->query($sql) === TRUE) {

      $last_id = $conn->insert_id;
      if ($type == 1) {
        if(count($_FILES) > 0) {
          if(is_uploaded_file($_FILES['restpic']['tmp_name'])) {
          // mysql_connect("localhost", "root", "");
          // mysql_select_db ("phppot_examples");
          $imgData =addslashes(file_get_contents($_FILES['restpic']['tmp_name']));
          $imageProperties = getimageSize($_FILES['restpic']['tmp_name']);
          // $sql = "INSERT INTO output_images(imageType ,imageData)
          // VALUES('{$imageProperties['mime']}', '{$imgData}')";
          // $current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
          // if(isset($current_id)) {
          // header("Location: listImages.php");
        // }
        $hd = $_POST['hd'];
// {$imageProperties['mime']}
        $query = "INSERT INTO resturant_tbl (user_id, img, img_type, status, home_delivery) VALUES ($last_id,'{$imageProperties['mime']}','{$imgData}',0,'$hd')";

        if ($conn->query($query) === TRUE) {
          echo "successfully Registerd";
        }
      }
    }
    } else {

      echo "<script>alert('successfully Registered');window.open('login.html','_self');</script>";
      // header('Location: login.html');
      // window.open("www.youraddress.com","_self")
    }

  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
 ?>
