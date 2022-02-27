<?php
include 'connect.php';

if (isset($_POST["submit"])) {
    
    try {

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $father_name = $_POST['father_name'];
      $mother_name = $_POST['mother_name'];
      $dob = $_POST['dob'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $password = $_POST['password'];
  
        $sql = "INSERT INTO info (firstname, lastname, fathername, mothername, dob, address, email, password)
        VALUES ('$fname', '$lname', '$father_name', '$mother_name', '$dob', '$address', '$email', '$password')";
        $conn->exec($sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    
}

$conn = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<a href="./login.php">Log In</a>

</body>
</html>