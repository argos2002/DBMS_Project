<?php
 session_start();
 $true=$_SESSION['aid'];
 if($true!=true){
     header("Location: ../index.php");
 }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_view_style.css">
    <title>Admin Page</title>
</head>
<body>
    <nav class="navbar background">

        <ul class="nav-list">
            <li><a href="admin_view.php">Home</a></li>
            <li><a href="../php/admin_viewemp.php">View</a></li>
            <li><a href="../html/admin_add.php">Add</a></li>
            <li><a href="admin_new.php">New Admin</a></li>

        </ul>
        <div class="rightNav">
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <section class="background firstSection">
        <div class="logo">
            <img src="../img/c.jpeg" alt="image">
        </div>
        <div class="fhalf">
            <p class="text-big">Welcome Admin!</p>
        </div>
        
    </section>
</body>
</htmld