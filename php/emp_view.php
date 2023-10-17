<?php
    session_start();
    $true=$_SESSION['eno'];
    if($true!=true){
        header("Location: ../index.php");
    }
    $server="localhost";
        $username="root";
        $password="";
        $dbname="ems";
        $con=mysqli_connect($server,$username,$password,$dbname);
        if(!$con){
            die("connection to the databse failed due to"+mysqli_connect_error());
        }
    $check="SELECT * FROM `emp_details` WHERE eno ='$_SESSION[eno]'";
    $data=mysqli_query($con,$check);
    $row=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/emp_view_style.css">
    <title>Employee Details</title>
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class="background firstSection">
        <div class="fhalf">
            <p class="text-big">Welcome</p>
            <?php
                echo "<p class='text-name'><b>".$row['name']."</b></p>";
            ?>

            <div class="login-box">
            <?php
                echo "<label class='text-small'>Employee no: ".$row['eno']."</label>";
                echo "<label class='text-small'>Date of Birth: ".$row['dob']."</label>";
                echo "<label class='text-small'>Gender: ".$row['gender']."</label>";
                echo "<label class='text-small'>Phone no:".$row['phone']."</label>";
                echo "<label class='text-small'>Email id: ".$row['email']."</label>";
                echo "<label class='text-small'>Department: ".$row['dep']."</label>";
                echo "<label class='text-small'>Joining Date:  ".$row['join_date']."</label>";
                echo "<label class='text-small'>Salary: ".$row['salary']."</label>";
            ?>
            </div>
        </div>
        
    </section>
</body>
</html>