<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

<form action="create.php" method="post">
<label for="fname">First Name:</label>
<input type="text" name="fname"><br><br>
<label for="lname">Last Name:</label>
<input type="text" name="lname"><br><br>
<label for="father_name">Father's Name:</label>
<input type="text" name="father_name"><br><br>
<label for="mother_name">Mother's Name:</label>
<input type="text" name="mother_name"><br><br>
<label for="dob">Date of Birth:</label>
<input type="date" name="dob"><br><br>
<label for="address">Address:</label>
<input type="text" name="address"><br><br>
<label for="email">Email:</label>
<input type="email" name="email"><br><br>
<label for="password">Password:</label>
<input type="password" name="password"><br><br>
<button type="submit" name="submit">Register</button>
</form><br><br>
<a href="login.php">Log In</a>
    
</body>
</html>