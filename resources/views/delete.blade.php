<?php
//delete.php
$_POST[('username')]= $_GET[('username')];
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"chris");
$query = mysqli_query($con, "DELETE FROM joy WHERE username = '".$_GET["username"]."'") or die(mysql_error());
//$query = mysqli_query($con,"Update student SET status='Deleted' WHERE studID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{
	echo"Record successfully deleted";
}

echo "<a href='http://127.0.0.1:8000/user'><input type='button' value='Back'/></a>";
?>