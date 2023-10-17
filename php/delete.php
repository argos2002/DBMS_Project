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
    $sql="DELETE FROM `ems`.`emp_details` WHERE eno='$id'; ";
    $data=mysqli_query($con,$sql);
    if($data)
    {
        header("Location: admin_viewemp.php");

    }
    else{
        echo "failed";
    }
?>