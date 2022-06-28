<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
    

    <div class ="register">
    <form  action='register'>
    <h1>REGISTRATION PAGE</h1> <br>

    <input type="text" name="studID"  placeholder="Student ID" required> <br> <br>
    <input type="text" name="lastName"  placeholder="Lastname" required> <br> <br>
    <input type="text" name="firstName"  placeholder="Firstname" required> <br> <br>
    <input type="text" name="course"  placeholder="Course" required> <br> <br>
    <input type="text" name="yearLevel"  placeholder="YearLevel" required> <br> <br>
    <input type="text" name="username"  placeholder="Username" required> <br> <br>
    <input type="password" name="password" placeholder="Password" required> <br> <br>
    <br><br>
    <button class="btn_reg">Register</button>   
    </form>
    </div>
    


    <div class="login">
    <h2>LOGIN PAGE</h2>

  
    <form action='log-in'>

    <input type="text" name="username" placeholder="Username" required> <br><br>
    <input type="password" name="password" placeholder="Password" required> <br><br>
    <br><br>
    <button class="btn_log">Login</button>
    </form>
    </div>
    
    
    
</body>
</html>