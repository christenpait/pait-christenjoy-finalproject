<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"chris");

$username = $_GET['username'];  
$password = $_GET['password'];  
$_POST[('username')]= $_GET[('username')];
$_POST[('password')]= $_GET[('password')];
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from joy where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql)or die( mysqli_error($con));  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            echo "<a href='user'><input type='button' value='Back'/></a>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo "<a href='./index.php'><input type='button' value='Back'/></a>";
        }     
?>
    
</body>
</html>