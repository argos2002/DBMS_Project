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
            <li><a href="admin_viewemp.php">View</a></li>
            <li><a href="../html/admin_add.php">Add</a></li>
            <li><a href="admin_new.php">New Admin</a></li>
        </ul>
        <div class="rightNav">
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <section class="background firstSection">
        <div class="fhalf">
            <p class="text-big">Employee Details</p>
        </div>
        <table class="center">
            <tr>
                <th>Employee no</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>email</th>
                <th>Address</th>
                <th>Department</th>
                <th>Joining Date</th>
                <th>Salary</th>
                <th>Password</th>
            </tr>
            <?php
                $server="localhost";
                $username="root";
                $password="";
                $dbname="ems";
        
                $con=mysqli_connect($server,$username,$password);
        
                if(!$con){
                    die("connection to the databse failed due to"+mysqli_connect_error());
                }
                $sql="SELECT * FROM `ems`.`emp_details`";
                $result=$con->query($sql);
                if($result-> num_rows>0)
                {
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row['eno']."</td><td>".$row['name']."</td><td>".$row['dob']."</td><td>".$row['gender']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['address']."</td><td>".$row['dep']."</td><td>".$row['join_date']."</td><td>".$row['salary']."</td><td>".$row['password']."</td><td><a href='edit_emp.php?id=$row[eno]'><input type='submit' value='Edit' class='edit'></input></a></td><td><a href='delete.php?id=$row[eno]'><input type='submit' value='Delete' class='delete' onClick='return check()'></input></a></td></tr>";
                    }
                }
                $con->close();
            ?>
        </table>
    </section>

</body>
</html>
<script>
            function check()
            {
                return confirm('Deletion confirmation');
            }
    </script>