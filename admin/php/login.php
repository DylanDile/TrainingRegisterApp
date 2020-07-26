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
if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $pass = $_POST['password'];

    $search = mysqli_query($conn, "SELECT * FROM `users`  WHERE  `userEmail` = '$email' AND `userPassword` = '$pass' ");

    if (mysqli_num_rows($search) == 1 ) {
        $row = mysqli_fetch_assoc($search);
       
        $_SESSION['email']=$row['userEmail'];
        $_SESSION['id']=$row['userID'];
        $_SESSION['role']=$row['userRole'];
        //echo '<script type="text/javascript">alert("You have successfully logged in."); window.location.href = "../application.php"; </script>';
        //header('Location: ../application.php');

                echo "<script>setTimeout(function() {swal({title: 'Succeeded',text: 'Successfully logged in !!',type: 'success' ,confirmButtonText: 'ok'},
                       function() {
                          window.location = '../application.php';
                          });}
                          ,0);
                          </script>";

    }
    else
    {
        //echo '<script type="text/javascript">alert("Failed to login"); window.location.href = "../index.php"; </script>';
                echo "<script>setTimeout(function() {swal({title: 'Failed',text: 'Failed to login!!',type: 'warning' ,confirmButtonText: 'close'},
                       function() {
                          window.location = '../index.php';
                          });}
                          ,0);
                          </script>";
    }
}