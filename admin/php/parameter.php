<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vendor/sweetalert/sweetalert.css">

<?php
session_start();
include_once 'conn.php';


if (isset($_POST["addUser"])) {

	$email = $_POST["userEmail"];
	$pass = $_POST["userPassword"];
	$role = $_POST["userRole"];

	$save = mysqli_query($conn, "INSERT INTO `users` (`userEmail`, `userPassword`, `userRole`) VALUES ('$email', '$pass', '$role')");
	if ($save) {
		echo "<script>setTimeout(function() {swal({title: 'Added',text: 'User added successfully',type: 'success' ,confirmButtonText: 'close'},
	                   function() {
	                      window.location = '../addUser.php';
	                      });}
	                      ,0);
	                      </script>";

	}
}



if (isset($_POST["addCourse"])) {

	$course = $_POST["courseName"];

	$save = mysqli_query($conn, "INSERT INTO `courses` (`courseName`) VALUES ('$course')");
	if ($save) {
		echo "<script>setTimeout(function() {swal({title: 'Added',text: 'Course added successfully',type: 'success' ,confirmButtonText: 'close'},
	                   function() {
	                      window.location = '../addCourse.php';
	                      });}
	                      ,0);
	                      </script>";

	}
}



if (isset($_POST["addRole"])) {

	$role = $_POST["roleName"];

	$save = mysqli_query($conn, "INSERT INTO `roles` (`roleName`) VALUES ('$role')");
	if ($save) {
		echo "<script>setTimeout(function() {swal({title: 'Added',text: 'Role added successfully',type: 'success' ,confirmButtonText: 'close'},
	                   function() {
	                      window.location = '../addRole.php';
	                      });}
	                      ,0);
	                      </script>";

	}
}

?>