<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="ems";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to the databse failed due to"+mysqli_connect_error());
    }
    $id=$_GET['id'];
    $sql="SELECT * FROM `ems`.`emp_details` WHERE eno='$id'; ";
    $data=mysqli_query($con,$sql);
    $result=mysqli_fetch_assoc($data);
?>

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
            <li><a href="../html/admin_add.html">Add</a></li>
            <li><a href="admin_new.php">New Admin</a></li>

        </ul>
        <div class="rightNav">
            <a href="../php/logout.php">Logout</a>
        </div>
    </nav>
    <section class="background firstSection">
    <div class="container">
        <h1>Edit Employee Details</h1>
        <form action="#" method="post">
            <input type="text" name="name" value="<?php echo $result['name'];?>" id="name" placeholder="Enter Name" autofill="on">
            <input type="text" name="date" value="<?php echo $result['dob'];?> "id="date" placeholder="Enter Date of Birth (YYYY-MM-DD)">
            <input type="text" name="gender" value="<?php echo $result['gender'];?>" id="gender" placeholder="Enter Gender" autofill="off">
            <input type="email" name="email" value="<?php echo $result['email'];?>" id="email" placeholder="Enter email" autofill="off">
            <input type="phone" name="phone" value="<?php echo $result['phone'];?>" id="phone" placeholder="Enter phone number" autofill="off">
            <input type="text" name="department" value="<?php echo $result['dep'];?>" id="department" placeholder="Enter Department" autofill="off">
            <input type="number" name="salary" value="<?php echo $result['salary'];?>" id="salary" step="0.01" placeholder="Enter salary" autofill="off">
            <input type="password" name="password" value="<?php echo $result['password'];?>" id="password" placeholder="Enter password">
            <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter address"><?php echo $result['address'];?>
            </textarea>
            <button class="btn" name= "btn">Update</button>
        </form>
        <?php
            if(isset($_POST['btn']))
            {
                $name=$_POST['name'];
                $gender=$_POST['gender'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $date=$_POST['date'];
                $department=$_POST['department'];
                $address=$_POST['address'];
                $salary=$_POST['salary'];
                $pwd=$_POST['password'];
        
                $sql = "UPDATE `ems`.`emp_details` SET `name` = '$name', `dob` = '$date', `gender` = '$gender', `phone` = '$phone', `email` = '$email', `dep` = '$department', `salary` = '$salary', `address` = '$address', `password` = '$pwd' WHERE `eno` = '$id';";
                $data=mysqli_query($con,$sql);  
                header("Location: admin_viewemp.php");
          
            }
            $con->close();
        ?>
    </div>
</section>
</body>
</html>