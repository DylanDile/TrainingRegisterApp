

<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vendor/sweetalert/sweetalert.css">

<?php
session_start();
include_once 'conn.php';


if (isset($_POST["submit"])) {

	$fname = $_POST["firstname"];
	$sname = $_POST["surname"];
	$dob = $_POST["DOB"];
	$sex = $_POST["sex"];
	$id = $_POST["IDnumber"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$start = $_POST["startingDate"];
	$finish = $_POST["finishingDate"];
	$cat = $_POST["category"];
	$min = $_POST["ministry"];
	$desig = $_POST["designation"];

	$save = mysqli_query($conn, "INSERT INTO `applications` (`firstname`, `surname`, `IDnumber`, `DOB`, `sex`, `address`, `phoneNumber`, `email`, `startingDate`, `finishingDate`, `category`, `ministry`, `designation`, `status`) VALUES ('$fname', '$sname', '$id', '$dob', '$sex', '$address', '$phone', '$email', '$start', '$finish', '$cat', '$min', '$desig', 'pending')");
	if ($save) {
		echo "<script>setTimeout(function() {swal({title: 'Succeeded',text: 'Record captured successfully !!',type: 'success' ,confirmButtonText: 'close'},
	                   function() {
	                      window.location = '../registration.php';
	                      });}
	                      ,0);
	                      </script>";

	}else 
		echo "<script>setTimeout(function() {swal({title: 'Failed',text: 'Failed to capture the record!!',type: 'warning' ,confirmButtonText: 'close'},
	                   function() {
	                      window.location = '../registration.php';
	                      });}
	                      ,0);
	                      </script>";
}

?>