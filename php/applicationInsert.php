<?php
include_once 'conn.php';


if (isset($_POST["basic"])) {

	$fname = $_POST["firstname"];
	$sname = $_POST["surname"];
	$dob = $_POST["DOB"];
	$sex = $_POST["sex"];
	$id = $_POST["IDnumber"];

	$insert = mysqli_query($conn, "INSERT INTO `applications` (`firstname`, `surname`, `IDnumber`, `DOB`, `sex`) VALUES ('$fname', '$sname', '$id', '$dob', '$sex')");
	if ($insert) {
		$app_id = $conn->insert_id;
		session_start();
		$_SESSION['msg'] = "Record captured successfully";
		$_SESSION['applicationID']=$app_id;
		$_SESSION['IDnumber']=$_POST["IDnumber"];
		header('Location: ../contactForm.php');

	}
}



if (isset($_POST["contact"])) {

	
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$app_id = $_POST["applicationID"];
	$id = $_POST["IDnumber"];

	$update = mysqli_query($conn, "UPDATE `applications` SET `address`='$address',`phoneNumber`='$phone',`email`='$email' WHERE applicationID='$app_id'");
	if ($update) {
		
		$_SESSION['msg'] = "Record captured successfully";
		$_SESSION['applicationID']=$app_id;
		$_SESSION['IDnumber']=$id;
		header('Location: ../categoryForm.php');

	}
}



if (isset($_POST["categories"])) {

	$cat = $_POST["category"];

	if ($cat == 'Citizen') {

		$min = '';
		$desig = '';
		$app_id = $_POST["applicationID"];
		$id = $_POST["IDnumber"];
		$course = $_POST["course"];

	}elseif ($cat == 'Government') {
		$min = $_POST["ministry"];
		$desig = $_POST["designation"];
		$app_id = $_POST["applicationID"];
		$id = $_POST["IDnumber"];
		$course = $_POST["course"];
	}
	

	$update = mysqli_query($conn, "UPDATE `applications` SET `category`='$cat',`ministry`='$min',`designation`='$desig',`course`='$course' WHERE applicationID='$app_id'");
	if ($update) {
		
		$_SESSION['msg'] = "Record captured successfully";
		$_SESSION['applicationID']=$app_id;
		$_SESSION['IDnumber']=$id;
		header('Location: ../dateProposal.php');

	}
}



if (isset($_POST["dates"])) {

	$start = $_POST["startingDate"];
	$finish = $_POST["finishingDate"];
	$app_id = $_POST["applicationID"];
	$id = $_POST["IDnumber"];

	$update = mysqli_query($conn, "UPDATE `applications` SET `startingDate`='$start',`finishingDate`='$finish',`status`='pending' WHERE applicationID='$app_id' ");
	if ($update) {
		
		$_SESSION['msg'] = "Record captured successfully";
		$_SESSION['applicationID']=$app_id;
		$_SESSION['IDnumber']=$id;
		header('Location: ../index.php');

	}
}

?>