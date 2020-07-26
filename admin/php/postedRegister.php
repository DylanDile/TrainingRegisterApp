<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vendor/sweetalert/sweetalert.css">
<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start(); 
    }
include_once 'conn.php';
if (isset($_POST['mark'])) {
   $reg_id = $_POST['reg_id'];
   $cid = $_POST['cid'];
   $day = $_POST['day'];
   $attendance = (isset($_POST['attendance']))? $_POST['attendance'] : NULL ;
   $comment = (isset($_POST['comment']))? $_POST['comment'] : NULL ;

   //echo $reg_id . "  ". $cid . "  ". $day . "  ". $comment . "  " . $attendance ;  

    $query = "UPDATE `weeklyregister` SET day".$day." = '$attendance' WHERE `applicationID` = '$reg_id' AND `course` = '$cid'  ";
    $sql = "UPDATE `comments` SET day".$day." = '$comment' WHERE `applicationID` = '$reg_id' AND `courseID` = '$cid'  ";
    //echo $sql;
    $save = mysqli_query($conn, $query);
    $comm = mysqli_query($conn, $sql);
    if ($query && $comm) {

                echo "<script>setTimeout(function() {swal({title: 'Succeeded',text: 'Register for today has been marked !!',type: 'success' ,confirmButtonText: 'ok'},
                       function() {
                          window.location = '../mycourse.php?reg_id=".$reg_id."';
                          });}
                          ,0);
                          </script>";

    }
    else
    {
        //echo '<script type="text/javascript">alert("Failed to login"); window.location.href = "../index.php"; </script>';
                echo "<script>setTimeout(function() {swal({title: 'Failed',text: 'Failed to mark register!!',type: 'warning' ,confirmButtonText: 'close'},
                       function() {
                          window.location = '../mycourse.php?reg_id=".$reg_id."';
                          win
                          });}
                          ,0);
                          </script>";
    }
}