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
    <title>Add New Employees</title>
    <link rel="stylesheet" href="../css/admin_new_add.css">
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <li><a href="../php/admin_view.php">Home</a></li>
            <li><a href="../php/admin_viewemp.php">View</a></li>
            <li><a href="../html/admin_add.php">Add</a></li>
            <li><a href="admin_new.php">New Admin</a></li>
        </ul>
        <div class="rightNav">
            <a href="../php/logout.php">Logout</a>
        </div>
    </nav>
    <section class="background firstSection">
    <div class="container">
        <h1>Add New Admin Details</h1>
        <form action="../php/admin_new_add.php" method="post">
            <input type="number" name="id" id="id" placeholder="Enter admin id" autofill="off">
            <input type="password" name="password" id="password" placeholder="Enter password">
            <button class="btn">Submit</button>
        </form>
    </div>
</section>
</body>
</html>