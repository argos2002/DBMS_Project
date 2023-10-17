<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_login_style.css">
    <title>Admin Login</title>
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../html/about.html">About</a></li>
        </ul>
        <div class="rightNav">
            <a href="../index.php">Employee Login</a>
        </div>
    </nav>
    <section class="background firstSection">
        <div class="logo">
            <img src="../img/c.jpeg" alt="image">
        </div>
        <div class="fhalf">
            <p class="text-big">Hi, welcome to Admin Portal!</p>
            <p class="text-small">Login through your credentials</p>
            <div class="login-box">
                <form action="admin_login_check.php" method="post">
                    <input type="number" name="aid" id="aid" placeholder="Enter admin id" autofill="off">
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <button class="btn">Login</button>
                </form>
            </div>
        </div>
        
    </section>
</body>
</html>