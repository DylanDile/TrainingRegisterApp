
<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vendor/sweetalert/sweetalert.css">

<?php
session_start();
include_once 'conn.php';


if (isset($_POST["schedule"])) {

	
	$id = $_POST["book_id"];
	$sDate = $_POST["sDate"];
	$fDate = $_POST["fDate"];

	$save = mysqli_query($conn, "UPDATE `applications` SET `startingDate`='$sDate', `finishingDate`='$fDate', `status`='booked' WHERE applicationID='$id'");
	if ($save) {
		echo "<script>setTimeout(function() {swal({title: 'Succeeded',text: 'Selected record has been scheduled successfully',type: 'success' ,confirmButtonText: 'close'},
	                   function() {
	                      window.location = '../application.php';
	                      });}
	                      ,0);
	                      </script>";

	}
}


if (isset($_GET["registration_id"])) {

	
	$id = $_GET["registration_id"];

    $select = mysqli_query($conn,"SELECT * FROM `applications`  WHERE `applicationID` = '$id' ");
    if (mysqli_num_rows($select) ==1) {
        $aid = mysqli_fetch_assoc($select);

        $course = $aid['course'];

		$save = mysqli_query($conn, "INSERT INTO `weeklyregister`(`applicationID`,`course`) VALUES ('$id','$course')");
		$comm = mysqli_query($conn, "INSERT INTO `comments`(`applicationID`, `courseID`) VALUES ('$id', '$course')");
		if ($save && $comm) {
			$update = mysqli_query($conn, "UPDATE `applications` SET `status`='training' WHERE applicationID='$id'");
			if ($update) {
				echo "<script>setTimeout(function() {swal({title: 'Succeeded',text: 'Selected record has been scheduled successfully',type: 'success' ,confirmButtonText: 'close'},
	                   function() {
	                      window.location = '../ontraining.php';
	                      });}
	                      ,0);
	                      </script>";
				//header("Location: ../addToRegister.php");
			}
			

		}
	}
}


?>