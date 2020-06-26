<?php
session_start();

$id = $_SESSION["id"];
$email = $_SESSION["email"];

if(isset($_POST['submit'])){

    $gender = $_POST['gender'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $birthdate = $_POST['birthdate'];

    $shippingaddress = $_POST['shippingaddress'];
    $shippingcity = $_POST['shippingcity'];
    $shippingstate = $_POST['shippingstate'];
    $shippingzipcode = $_POST['shippingzipcode'];
    $shippingcountry = $_POST['shippingcountry'];
    $contactnumber = $_POST['contactnumber'];
/*--------------------------for profile picture----------------------------*/
    $image = $_FILES['image']['name'];

    if(!empty($image)) {
        $target = "../images/profile/".$id.".".strtolower(pathinfo($image, PATHINFO_EXTENSION));
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $target = str_replace("../", "", $target);
            $profilepicture = $target;
            $_SESSION["profilepicture"] = $profilepicture;
        }
        else {
            echo "<script>alert('Failed to upload your image.')</script>";
        }
    }
    else {
        $profilepicture = $_SESSION["profilepicture"];
    }
    
/*---------------------------end of profile picture----------------------*/
    
    include '../db_connect.php';

    $updatequery = "UPDATE Registered SET Gender='$gender', First_Name='$firstname', Last_Name='$lastname', Country='$country', Birthday='$birthdate',Profile_Picture='$profilepicture' WHERE ID='$id'";
    $updateshipping = "UPDATE Shipping SET Shipping_Address='$shippingaddress', Shipping_City='$shippingcity', Shipping_State='$shippingstate', Shipping_Zipcode='$shippingzipcode', Shipping_Country='$shippingcountry', Contact_Number='$contactnumber' WHERE Email_Address='$email'";


    if ($resultquery = mysqli_query($dbcon, $updatequery) && $resultshipping = mysqli_query($dbcon, $updateshipping)) {
        $_SESSION["sex"] = $gender;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["lastname"] = $lastname;
        $_SESSION["country"] = $country;
        $_SESSION["birthdate"] = $birthdate;

        $_SESSION["shippingaddress"] = $shippingaddress;
        $_SESSION["shippingcity"] = $shippingcity;
        $_SESSION["shippingstate"] = $shippingstate;
        $_SESSION["shippingzipcode"] = $shippingzipcode;
        $_SESSION["shippingcountry"] = $shippingcountry;
        $_SESSION["contactnumber"] = $contactnumber;

        echo "<script>alert('Your account is successfully updated.'); location.href = '/';</script>";
    }

    else {
        echo "<script>alert('Something went wrong.'); location.href = '/';</script>";
    }

}

?>

