<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_login_style.css">
    <title>Employee Management System</title>
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="html/about.html">About</a></li>
        </ul>
        <div class="rightNav">
            <a href="php/admin_login.php">Admin Login</a>
        </div>
    </nav>
    <section class="background firstSection">
        <div class="logo">
            <img src="img/c.jpeg" alt="image">
        </div>
        <div class="fhalf">
            <p class="text-big">Hi, welcome to Employee Portal!</p>
            <p class="text-small">Login through your credentials</p>
            <div class="login-box">
                <form action="php/login.php" method="post">
                    <input type="number" name="eno" id="eno" placeholder="Enter employee id" autofill="off">
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <button class="btn">Login</button>
                </form>
            </div>
        </div>
        
    </section>
</body>
</html>