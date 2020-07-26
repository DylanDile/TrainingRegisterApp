
<?php

session_start();
include_once 'conn.php';
if (isset($_POST['login'])) {
   $id = $_POST['IDnumber'];
   $phone = $_POST['phoneNumber'];


        $search = mysqli_query($conn, "SELECT * FROM `applications`  WHERE  `IDnumber` = '$id' AND `phoneNumber` = '$phone' ");

        if (mysqli_num_rows($search) == 1 ) {
            $row = mysqli_fetch_assoc($search);
            $app_id = $row['applicationID'];
            $status = $row['status'];



            if ($status=='pending') {
                $_SESSION['msg']= "Sorry; we have not yet found the best slot for you, we will come back to you soon. We apologise for an inconvinience caused. Below is your proposed slot:";
                $_SESSION['sdate']=$row['startingDate'];
                $_SESSION['fdate']=$row['finishingDate'];
                header('Location: ../track.php');
            }elseif ($status=='booked') {
                $_SESSION['msg']= "We have successfully found you a slot on the following dates: (TIME: 0900hrs to 1630hrs) ";
                $_SESSION['sdate']=$row['startingDate'];
                $_SESSION['fdate']=$row['finishingDate'];
                header('Location: ../track.php');
            
            }elseif ($status=='training') {
                $_SESSION['msg']= "You are currently under training Process. You will finish on: ";
                $_SESSION['sdate']=$row['startingDate'];
                $_SESSION['fdate']=$row['finishingDate'];
                header('Location: ../track.php');
            }


        }else{
            $_SESSION['msg']="Either you have already completed your training Or you did not apply for training.";
            header('Location: ../login.php');

            }

}







?>
