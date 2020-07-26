<?php

session_start();
include_once 'conn.php';

if (isset($_POST['today'])) {
    $day = $_POST['day'];
    $course = $_POST['course'];

    if ($day==1) {
    //    $select = mysqli_query($conn,"SELECT applicationID FROM `weeklyregister`  WHERE `day1` = NULL   ");
         
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `course`='$course' AND `day1` IS NULL  ";
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

    if ($day==2) {
    //    $select = mysqli_query($conn,"SELECT applicationID FROM `weeklyregister`  WHERE `day1` = NULL   ");
         
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `course`='$course' AND `day2` IS NULL  ";
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
    if ($day==3) {
    //    $select = mysqli_query($conn,"SELECT applicationID FROM `weeklyregister`  WHERE `day1` = NULL   ");
         
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `course`='$course' AND `day3` IS NULL  ";
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

    if ($day==4) {
    //    $select = mysqli_query($conn,"SELECT applicationID FROM `weeklyregister`  WHERE `day1` = NULL   ");
         
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `course`='$course' AND `day4` IS NULL  ";
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

    if ($day==5) {
    //    $select = mysqli_query($conn,"SELECT applicationID FROM `weeklyregister`  WHERE `day1` = NULL   ");
         
			$query = "SELECT applicationID FROM `weeklyregister`  WHERE `course`='$course' AND `day5` IS NULL  ";
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

if (isset($_POST['group'])) {
    $_SESSION['id'] = $_POST['course'];
	header("Location: application.php");
}
?>
