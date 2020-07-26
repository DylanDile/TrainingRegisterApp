<?php



$host = "localhost";
$username = "root";
$password = "Password1";
$dbname = "boka";

// Create connection
$conn = new mysqli( $host, $username, $password,$dbname ) or 
die($conn->error);

if(isset($_POST["update"]))
{
	$batchid = $_POST["batchid"];
	$credit_acc = $_POST["credit_acc"];
	$amount = $_POST["amount"];
	$response = $_POST["response"];
	$result = $_POST["result"];

	$query = "UPDATE records SET  			
			  response 	= '$response',
			  result	= '$result'
			 WHERE  credit_account = '$credit_acc' AND
					amount 	= '$amount' AND
					batch_reference = '$batchid'
			 ";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Balance</title>
</head>
<body>

</body>
</html>