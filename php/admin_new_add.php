<?php
    session_start();
    $true=$_SESSION['aid'];
    if($true!=true){
        header("Location: ../index.php");
    }
    if(isset($_POST['id'])){
        $server="localhost";
        $username="root";
        $password="";
        $dbname="ems";

        $con=mysqli_connect($server,$username,$password);

        if(!$con){
            die("connection to the databse failed due to"+mysqli_connect_error());
        }
        $id=$_POST['id'];
        $pwd=$_POST['password'];

        $sql="INSERT INTO `ems`.`login_admin` (`admin_id`,`password`) VALUES ('$id','$pwd');";

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
