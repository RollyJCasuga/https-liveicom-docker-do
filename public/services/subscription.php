<?php

include '../db_connect.php';

if (mysqli_connect_errno()) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
else{
    
    session_start();
    $email = $_SESSION["email"];
	$query = "SELECT * FROM orders WHERE Email='$email'";
	$result = mysqli_query($dbcon,$query);


	if($row = mysqli_fetch_assoc($result)){

		if($row["payment_response"] == 1){

			echo "<script>alert('This account is subscribed already.'); location.href = '../services';</script>";
		}

		else{

			echo "not subscribed";

   			}
	   		mysqli_close($dbcon);

        }
    else{
        echo "<script>location.href = '../';</script>";
    }
    }

?>

