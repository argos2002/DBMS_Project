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
        $aid=$_POST['aid'];
        $pwd=$_POST['password'];
        $check="SELECT * FROM `login_admin` WHERE admin_id='$aid' && password='$pwd';";
        $data=mysqli_query($con,$check);
        $total=mysqli_num_rows($data);
        if($total==1){
            $_SESSION['aid']=$aid;
            header("Location: admin_view.php");
        }
        else{
            session_unset();
            header("Location: admin_login.php");
            $con->close();
        }
    }
    
?>
