<?php

session_start();  

include 'connect.php';


$message = "";

try  
{ 

if(isset($_POST["submit"]))  
{  
     if(empty($_POST["email"]) || empty($_POST["password"]))  
     {  
          $message = '<label>All fields are required</label>';  
     }  
     else  
     {  
          
          $query = "SELECT * FROM info WHERE email = :email AND password = :password";  
          $statement = $conn->prepare($query);  
          $statement->execute(  
               array(  
                    'email'     =>     $_POST["email"],  
                    'password'     =>     $_POST["password"]  
               )  
          );  
          $count = $statement->rowCount();  
          if($count > 0)  
          {  
               $_SESSION["email"] = $_POST["email"];  
               header("location:login_success.php");  
          }  
          else  
          {  
               $message = '<label>Wrong email or password!</label>';  
          }  
     }  
}  
}  
catch(PDOException $e)  
{  
$message = $e->getMessage();  
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>

<form action="login.php" method="post">
    
<label for="email">Email:</label>
<input type="email" name="email"><br><br>
<label for="email">Password:</label>
<input type="password" name="password"><br><br>

<button type="submit" name="submit">Log In</button><br><br>

<a href="register.php">Register</a>

</form>
    
</body>
</html>