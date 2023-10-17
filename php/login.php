<?php
    {
        session_start();
        $server="localhost";
        $username="root";
        $password="";
        $dbname="ems";

        $con=mysqli_connect($server,$username,$password,$dbname);

        if(!$con){
            die("connection to the databse failed due to"+mysqli_connect_error());
        }
        $eno=$_POST['eno'];
        $pwd=$_POST['password'];
        $check="SELECT * FROM `emp_details` WHERE eno='$eno' && password='$pwd';";
        $data=mysqli_query($con,$check);
        $total=mysqli_num_rows($data);
        if($total==1){
            $_SESSION['eno']=$eno;
            header("Location: ../php/emp_view.php");
        }
        else{
            session_unset();
            header("Location: logout.php");
            $con->close();
        }
    }
    
?>
