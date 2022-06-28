<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Privilage</title>
</head>
<body style="">
    
<?php

?>	 
<?php $con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"chris"); ?>	

	<div id="main-container"><center>

    <joy style ="font-size : 30px;text-align:center; color:black;">Database Record</joy>
        <?php 
    echo "<table border='1'>
    <tr style='text-decoration:none;background-color:gray;font-size:20px'>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>YearLevel</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
            <th>Action</th>
         </tr>";
$query1 = mysqli_query($con, "SELECT * FROM joy WHERE status = 'Active'") or die(mysqli_error());
    while($row = mysqli_fetch_array($query1)){
        echo "<tr style='text-decoration:none;background-color:#b3d1ff;font-size:20px;text-align:center;'>
        <td>$row[studID]</td>
        <td>$row[firstName]</td>
        <td>$row[lastName]</td>
        <td>$row[course]</td>
        <td>$row[yearLevel]</td>
        <td>$row[username]</td>
        <td>$row[password]</td>
        <td>$row[userlevel]</td>
        <td>$row[status]</td><br>
                <td align='center'><a style='text-decoration:none;background-color:red;' href='delete/?username=$row[username]'>X</a></td>
                <td align='center'><a style='text-decoration:none;background-color:green;' href='update1.php/?username=$row[username]'>Update</a></td>
                </tr>";
    }
    echo "</table><br><br>"
?>
		<a href='./index.php' style = "border:3px solid black; font-size:30px;text-decoration:none;padding: 5px;color:white;background-color:#000099">Logout</a>
		</ul>
        </table></center>
	</div>
    </body>
</html>