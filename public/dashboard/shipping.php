<?php 
session_start();
$email = $_SESSION["email"];
$shippingaddress = "";
$shippingcountry = $_SESSION["country"];
$shippingstate = "";
$shippingprovince = "";
$shippingcity = "";
$shippingzipcode = "";
$contactnumber = "";

include '../db_connect.php';

if (!empty($email)){
	$searchshippingemail = "SELECT * FROM Shipping WHERE Email_Address='$email'";
	$resultshippingemail = mysqli_query($dbcon,$searchshippingemail);
	if (mysqli_num_rows($resultshippingemail) > 0) {
		$row = mysqli_fetch_array($resultshippingemail);
		$_SESSION['shippingaddress'] = $row['Shipping_Address'];
		$_SESSION['shippingcity'] = $row['Shipping_Country'];
		$_SESSION['shippingstate'] = $row['Shipping_State'];
		$_SESSION['shippingzipcode'] = $row['Shipping_Province'];
		$_SESSION['shippingcountry'] = $row['Shipping_City'];
		$_SESSION['shippingprovince'] = $row['Shipping_Zipcode'];
		$_SESSION['contactnumber'] = $row['Contact_Number'];
		$_SESSION['deliveryservices'] = $row['Delivery_Services'];

	}
	else{
		//Initialize Shipping Details


		//$initshipping = "INSERT INTO `Shipping`(`Client_ID`, `Email_Address`, `Shipping_Address`, `Shipping_City`, `Shipping_State`, `Shipping_Zipcode`, `Shipping_Country`, `Contact_Number`) VALUES ('', '$email', '$shippingaddress', '$shippingcity', '$shippingstate', '$shippingzipcode', '$shippingstate', '$shippingzipcode' )";
		$initshipping = "INSERT into Shipping SET Email_Address='$email', Shipping_Address='$shippingaddress', Shipping_City='$shippingcity', Shipping_State='$shippingstate', Shipping_Zipcode='$shippingzipcode', Shipping_Country='$shippingcountry', Contact_Number='$contactnumber'";

		if (mysqli_query($dbcon, $initshipping)) {
			//echo "<script>alert('Shipping Initialize');</script>";
		}
		else {
			$error = "Error" . mysqli_error($dbcon);
			echo "<script>alert('".$error."');</script>";
		}
		mysqli_close($dbcon);
	}
}

?>