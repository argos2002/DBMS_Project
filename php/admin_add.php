<?php
    session_start();
    $true=$_SESSION['aid'];
    if($true!=true){
        header("Location: ../index.php");
    }
    if(isset($_POST['name'])){
        $server="localhost";
        $username="root";
        $password="";
        $dbname="ems";

        $con=mysqli_connect($server,$username,$password);

        if(!$con){
            die("connection to the databse failed due to"+mysqli_connect_error());
        }
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $date=$_POST['date'];
        $department=$_POST['department'];
        $address=$_POST['address'];
        $salary=$_POST['salary'];
        $pwd=$_POST['password'];

        $sql="INSERT INTO `ems`.`emp_details` (`name`, `dob`, `gender`, `phone`, `email`, `dep`, `salary`,`address`,`password`) VALUES ('$name', '$date', '$gender', '$phone', '$email', '$department', '$salary','$address','$pwd');";

        if($con->query($sql)==true)
        {           
            $insert=true;
        }
        else{
            echo "ERROR : $sql <br> $con->error";
        }
        $con->close();
    }
    header("Location: admin_viewemp.php");
?>
