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
    <link rel="stylesheet" href="../css/admin_add_style.css">
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <li><a href="../php/admin_view.php">Home</a></li>
            <li><a href="../php/admin_viewemp.php">View</a></li>
            <li><a href="../html/admin_add.php">Add</a></li>
            <li><a href="../php/admin_new.php">New Admin</a></li>

        </ul>
        <div class="rightNav">
            <a href="../php/logout.php">Logout</a>
        </div>
    </nav>
    <section class="background firstSection">
    <div class="container">
        <h1>Add New Employee Details</h1>
        <form action="../php/admin_add.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Name" autofill="off">
            <input type="text" name="date" id="date" placeholder="Enter Date of Birth (YYYY-MM-DD)" autofill="off">
            <input type="text" name="gender" id="gender" placeholder="Enter Gender" autofill="off">
            <input type="email" name="email" id="email" placeholder="Enter email" autofill="off">
            <input type="phone" name="phone" id="phone" placeholder="Enter phone number" autofill="off">
            <input type="text" name="department" id="department" placeholder="Enter Department" autofill="off">
            <input type="number" name="salary" id="salary" step="0.01" placeholder="Enter salary" autofill="off">
            <input type="password" name="password" id="password" placeholder="Enter password">
            <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter address"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</section>
</body>
</html>