<?php

session_start();
include_once 'conn.php';

if (isset($_POST["mark"])) {

	
	$id = $_POST["id"];
	$day = $_POST["day"];
	$act = $_POST["action"];
	$coment = $_POST["comment"];


	if ($day==1) {
		$save = mysqli_query($conn, "UPDATE `weeklyregister` SET `day1`='$act' WHERE applicationID='$id' ");
		$comm = mysqli_query($conn, "UPDATE `comments` SET `day1`='$coment' WHERE applicationID='$id' ");
		if ($save && $comm) {
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `day1` IS NULL  ";
			$result = $conn->query($query);     
			if (!$result) {
			  printf("Query failed: %s\n", $mysqli->error);
			  exit;
			}      
			while($row = $result->fetch_row()) {
			  $rows[]=$row;
			}
			for ($i = 0; $i < count($rows); $i++) {
			  $IDs[] = implode(',', $rows[$i]);
			}
			$_SESSION['id'] = $IDs;
			$_SESSION['day'] = $day;
			header("Location: ../Register.php");
			// Example for outputting on screen:

			$result->close();
			$conn->close();
		}

	}
	if ($day==2) {
		$save = mysqli_query($conn, "UPDATE `weeklyregister` SET `day2`='$act' WHERE applicationID='$id' ");
		$comm = mysqli_query($conn, "UPDATE `comments` SET `day2`='$coment' WHERE applicationID='$id' ");
		if ($save && $comm) {
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `day2` IS NULL  ";
			$result = $conn->query($query);     
			if (!$result) {
			  printf("Query failed: %s\n", $mysqli->error);
			  exit;
			}      
			while($row = $result->fetch_row()) {
			  $rows[]=$row;
			}
			for ($i = 0; $i < count($rows); $i++) {
			  $IDs[] = implode(',', $rows[$i]);
			}
			$_SESSION['id'] = $IDs;
			$_SESSION['day'] = $day;
			header("Location: ../Register.php");
			// Example for outputting on screen:

			$result->close();
			$conn->close();
		}

	}
	if ($day==3) {
		$save = mysqli_query($conn, "UPDATE `weeklyregister` SET `day3`='$act' WHERE applicationID='$id' ");
		$comm = mysqli_query($conn, "UPDATE `comments` SET `day3`='$coment' WHERE applicationID='$id' ");
		if ($save && $comm) {
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `day3` IS NULL  ";
			$result = $conn->query($query);     
			if (!$result) {
			  printf("Query failed: %s\n", $mysqli->error);
			  exit;
			}      
			while($row = $result->fetch_row()) {
			  $rows[]=$row;
			}
			for ($i = 0; $i < count($rows); $i++) {
			  $IDs[] = implode(',', $rows[$i]);
			}
			$_SESSION['id'] = $IDs;
			$_SESSION['day'] = $day;
			header("Location: ../Register.php");
			// Example for outputting on screen:

			$result->close();
			$conn->close();
		}

	}
	if ($day==4) {
		$save = mysqli_query($conn, "UPDATE `weeklyregister` SET `day4`='$act' WHERE applicationID='$id' ");
		$comm = mysqli_query($conn, "UPDATE `comments` SET `day5`='$coment' WHERE applicationID='$id' ");
		if ($save && $comm) {
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `day4` IS NULL  ";
			$result = $conn->query($query);     
			if (!$result) {
			  printf("Query failed: %s\n", $mysqli->error);
			  exit;
			}      
			while($row = $result->fetch_row()) {
			  $rows[]=$row;
			}
			for ($i = 0; $i < count($rows); $i++) {
			  $IDs[] = implode(',', $rows[$i]);
			}
			$_SESSION['id'] = $IDs;
			$_SESSION['day'] = $day;
			header("Location: ../Register.php");
			// Example for outputting on screen:

			$result->close();
			$conn->close();
		}

	}
	if ($day==5) {
		$save = mysqli_query($conn, "UPDATE `weeklyregister` SET `day5`='$act' WHERE applicationID='$id' ");
		$comm = mysqli_query($conn, "UPDATE `comments` SET `day5`='$coment' WHERE applicationID='$id' ");
		if ($save && $comm) {
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `day5` IS NULL  ";
			$result = $conn->query($query);     
			if (!$result) {
			  printf("Query failed: %s\n", $mysqli->error);
			  exit;
			}      
			while($row = $result->fetch_row()) {
			  $rows[]=$row;
			}
			for ($i = 0; $i < count($rows); $i++) {
			  $IDs[] = implode(',', $rows[$i]);
			}
			$_SESSION['id'] = $IDs;
			$_SESSION['day'] = $day;
			header("Location: ../Register.php");
			// Example for outputting on screen:

			$result->close();
			$conn->close();
		}

	}
}

?>