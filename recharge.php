<?php
	$studentid = $_GET["studentid"];
			$email = $_GET['email'];
	$password = $_GET['password'];
	$accountno= $_GET['accountno'];
	$rechargeamount= $_GET['rechargeamount'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into recharge(studentid, email, password, accountno,rechargeamount) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("issii", $studentid, $email, $password, $accountno, $rechargeamount);
		$execval = $stmt->execute();
		echo $execval;
		
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>