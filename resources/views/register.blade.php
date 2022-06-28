<?php

print_r($_POST);
$_POST[('studID')]= $_GET[('studID')];
$_POST[('firstName')]= $_GET[('firstName')];
$_POST[('lastName')]= $_GET[('lastName')];
$_POST[('course')]= $_GET[('course')];
$_POST[('yearLevel')]= $_GET[('yearLevel')];
$_POST[('username')]= $_GET[('username')];
$_POST[('password')]= $_GET[('password')];
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"register"); 

$query = mysqli_query($con, "INSERT INTO loginregister (studID, firstName, lastName, course, yearLevel, username, 
password) VALUES ('$_POST[studID]','$_POST[firstName]','$_POST[lastName]','$_POST[course]','$_POST[yearLevel]','$_POST[username]','$_POST[password]' )") or die(mysqli_error());
echo "<a href='./index.php'><input type='button' value='Back'/></a>";
?>