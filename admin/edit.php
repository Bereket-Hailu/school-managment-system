<?php
    //  echo "Id:";
    session_start();
        
    if(isset($_SESSION['aid']))  {
         
        
    }
    else{
        header('location:../admin/a_login.php');
    }


    include('../dbcon.php');

    $sid = $_GET['sid'];
    $nquery = "INSERT INTO `id`(`id`) VALUES ($sid)" ;

    $ts = mysqli_query($con,$nquery);

    $query= "SELECT * FROM `sdetails` WHERE `id`='$sid' ";
    
    $res=mysqli_query($con,$query);

    $data = mysqli_fetch_assoc($res);

?>