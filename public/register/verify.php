<?php

include '../db_connect.php';

if (mysqli_connect_errno()) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
else{

	$vkey = $_GET['vkey'];
	$query = "SELECT * FROM Registered WHERE Vkey='$vkey'";
	$result = mysqli_query($dbcon,$query);

	if($row = mysqli_fetch_assoc($result)){

		if($row["Verified"] == 1){

			echo "<script>alert('This account is verified already.'); location.href = 'https://livei.com';</script>";
		}

		else{

			$sql = "UPDATE Registered SET Verified=1 WHERE Vkey='$vkey'";
			if (mysqli_query($dbcon, $sql)) {
				echo "<script>location.href = 'https://livei.com/login';</script>";
   			}
			else {

				echo "<script>alert('Error verifying .mysqli_error($dbcon).'); location.href = 'https://livei.com/';</script>";

   			}
	   		mysqli_close($dbcon);

		}
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
