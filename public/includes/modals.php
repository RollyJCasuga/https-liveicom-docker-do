<?php session_start(); ?>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
  Launch demo modal
</button> -->

<style>
    #loginModal{
        text-align: center;
        padding: 20px;
    }
    #loginModal .modal .fade .show{
        display: flex;
        justify-content: center;
    }
    #loginModal h2{
        margin-top: 5px;
    }
    #modalLoginLogo{
        height: 60px;
        width: 180px;
        margin-top: 20px;
        margin-left: 17px;
    }
    #modalLoginForm{
        text-align: left;
    }
    #modalLoginForm input{
        font-size: 14px;
        font-weight: 400;
        border: 1px solid grey;
        background-color: rgba(0,0,0,0);
    }
    .form-control::-webkit-input-placeholder{color:black;opacity:0.5}.form-control::-moz-placeholder{color:black;opacity:0.5}.form-control:-ms-input-placeholder{color:black;opacity:0.5}.form-control::-ms-input-placeholder{color:black;opacity:0.5}.form-control::placeholder{color:black;opacity:0.5}
    
    input[type]{
        color: black;
    }
    input[type]:focus{
        color: black;
    }

    #modalLoginForm button{
        font-size: 14px;
        font-weight: 400;
        margin-top: 5px;
    }
    .x-button{
        color: black;
        font-size: 1.5rem;
    }
    #modalLoginFormBottom{
        text-align: center;
        margin-top: 20px;
    }
    .modal-md{max-width: 400px;}

    #modalLoginFormBottom a{
        font-weight: 600;
    }
    #loginModal .modal-dialog {
        margin: 0 calc((100vw - 400px) / 2);
    }
</style>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-md modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
            <span class="x-button" aria-hidden="true">&times;</span>
            </button>
            <img id="modalLoginLogo" src="liveiLogoTrans.png">
            <h2>Login</h2>
            <form action="login/login.php" method="post" id="modalLoginForm">
                <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" id="" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                <label>Password</label>
                <!-- <input type="password" class="form-control" id="" name="password" placeholder="Password" required> -->
                <div class="input-group">
                <input type="password" name="password" id="password" class="form-control" data-toggle="password" placeholder="Password" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="fa fa-eye"></i>
                    </span>
                </div>
                </div>
                </div>
                <button name="submit" type="submit" class="btn btn-primary form-control">Login</button>
                <div id="modalLoginFormBottom">
                    <label>Forgot Password?</label>
                    <br>
                    <label>New to Livei.com? <a class="text-primary" onclick="toggleRegister();">Register Now</a></label>
                </div>
			</form>
        </div>
    </div>
  </div>
</div>
<style>
    #registerModal{
        text-align: center;
        padding: 20px;
    }
    #registerModal h4{
        margin-top: 0px;
    }
    #modalRegisterLogo{
        height: 60px;
        width: 180px;
        margin-top: 10px;
    }
    #modalRegisterForm{
        text-align: left;
    }
    #modalRegisterForm input{
        font-size: 13px;
        font-weight: 400;
        border: 1px solid grey;
        background-color: rgba(0,0,0,0);
    }
    #modalRegisterForm button{
        font-size: 14px;
        font-weight: 400;
    }
    #modalRegisterFormBottom{
        text-align: center;
        margin-top: 10px;
    }
    #modalRegisterFormBottom a{
        font-weight: 600;
    }
    #email-notification{
        color: red;
        font-weight: 600;
        margin-top: 8px;
        margin-bottom: 5;
        margin-left: 10px;
    }
    #input-email{
        padding-bottom: 0px;
        margin-bottom: -10px;
    }
    #registerModal .modal-dialog {
        margin: 0 calc((100vw - 400px) / 2);
    }
    #registerModal .modal-content{
        margin-top: 0px;
    }
    #password-notification{
        color: red;
        font-weight: 600;
        margin-top: 8px;
        margin-bottom: 5;
        margin-left: 10px;
    }
    #password-group {
        margin-bottom: 0px;
    }
</style>
<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-md modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content-large modal-content">
        <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
            <span class="x-button" aria-hidden="true">&times;</span>
            </button>
            <img id="modalRegisterLogo" src="liveiLogoTrans.png">
            <h4>Join Livei.com now</h4>
            <form action="register/register.php" method="post" id="modalRegisterForm">
                <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" id="" name="firstname" placeholder="Enter first name" required>
                </div>
                <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" id="" name="lastname" placeholder="Enter last name" required>
                </div>
                <div class="form-group form-group-email" id="input-email">
                <label>Email address</label>
                <input type="email" class="form-control" id="" name="email" placeholder="Enter email" onkeyup="checkemail(this.value);" required>
                <label id="email-notification"></label>
                </div>
                <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                <input id="rpassword" type="password" name="password" class="form-control" data-toggle="password" onkeyup="inputPassword();" placeholder="Password" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="fa fa-eye"></i>
                    </span>
                </div>
                </div>
                </div>
                <div class="form-group" id="password-group">
                <label>Confirm Password</label>
                <div class="input-group">
                <input id="confirmpassword" class="form-control" type="password" name="" placeholder="Confirm Password" data-toggle="password" required onkeyup="checkPassword();"/>
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="fa fa-eye"></i>
                    </span>
                </div>
                </div>
                <label id="password-notification"></label>
                </div>
                <button id="register-btn" name="submit" type="submit" class="btn btn-primary form-control">Register</button>
                <div id="modalRegisterFormBottom">
                    <label>Registered? <a class="text-primary" onclick="toggleLogin();">Sign In Now</a></label>
                </div>
			</form>
        </div>
    </div>
  </div>
</div>
<script>
    function inputPassword() {
		document.getElementById('password-notification').innerHTML = '';
	}
    function checkPassword() {
		if (document.getElementById('rpassword').value == document.getElementById('confirmpassword').value) {
		    document.getElementById('password-notification').style.color = 'green';
		    document.getElementById('password-notification').innerHTML = 'Password match!';
		    document.getElementById('register-btn').disabled = false;
		}
		else {
		    document.getElementById('password-notification').style.color = 'red';
		    document.getElementById('password-notification').innerHTML = 'Password not match!';
		    document.getElementById('register-btn').disabled = true;
	  }
	}
</script>
<style>
    #servicesModal .card{
        background-color: rgba(0,0,0,0);
        border: 0px;
    }
    #servicesModal .card-body-services{
        display: flex;
        flex-direction: column;
        color: black;
        background-color: rgba(0,0,0,0);
        font-size: 14px;
        border: 0px;
    }
    #servicesModal .card-body-services img{
        max-height: 180px;
        max-width: 300px;
    }
    #servicesModal .card-body-services label{
        margin: 0px;
        margin-top: 5px;
    }
    #servicesModal .modal-bg{
        background-color: rgba(255,255,255,.8);
    }
    #servicesModal .modal-bg-white{
        background-color: white;
    }
    #servicesModal{
        color: black;
    }
    #servicesModal h4{
        margin-left: 2.25rem;
        margin-top: 5px;
        margin-bottom: 0px;
    }
    #servicesModal span{
        color: black;
    }
    #servicesModal .modal-content-large{
        margin-top: 0px;
        height: 82vh;
        overflow: auto;
        padding: 0px;
        padding-top: 20px;
    }
    #servicesModal .modal .fade .show{
        padding-left: 0px;
    }
    #servicesModal .modal-body-padding{
        padding: 0px;
    }
    #servicesModal button.close{
        margin-top: 5px;
        margin-right: 20px;
    }

</style>

<!-- Services modal -->
<div class="modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-lg modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content-large modal-content modal-bg">
        <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
            <span class="x-button" aria-hidden="true">&times;</span>
            </button>
            <h4>Services</h4>
            <div class="modal-body modal-body-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <!-- <div class="card" onclick="toggleLogin();"> -->
                        <?php
                            if ($_SESSION['loginStatus']){
                                //paywall
                                echo "<div class='card' onclick='togglePaywall();'>";
                            }
                            else {
                                
                                //login
                                echo "<div class='card' onclick='toggleLogin();'>";
                            }
                        ?>
                            <div class="card-body card-body-services">
                                <img class="service-image" src="lemp.png" alt="">
                                <label for="">Teamviewer Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="card" onclick="window.location.href='bdd33ab49ef4aefdc55cfbee2898b672.php'">
                            <div class="card-body card-body-services">
                                <img class="service-image" src="teamviewer.png" alt="">
                                <label for="">Putty Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="card">
                            <div class="card-body card-body-services">
                                <img class="service-image" src="putty.png" alt="">
                                <label for="">Teamviewer Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="card">
                            <div class="card-body card-body-services">
                                <img class="service-image" src="putty.png" alt="">
                                <label for="">Putty Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="card">
                            <div class="card-body card-body-services">
                                <img class="service-image" src="putty.png" alt="">
                                <label for="">LEMP Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="card">
                            <div class="card-body card-body-services">
                                <img class="service-image" src="putty.png" alt="">
                                <label for="">Raspbian Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="card">
                            <div class="card-body card-body-services">
                                <img class="service-image" src="putty.png" alt="">
                                <label for="">LEMP Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="card">
                            <div class="card-body card-body-services">
                                <img class="service-image" src="putty.png" alt="">
                                <label for="">Raspbian Training</label>
                                <label for="">$9.99/Hour</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
  </div>
</div>

<!-- for Dashboard -->

<style type="text/css">
    #dashboardModal {
        color: black;
    }

    #dashboardModal .modal-body {
        padding: 0;
        overflow: hidden auto;
        max-height: calc(100vh - 50px - 150px);
    }

    #dashboardModal .modal-body .top {
        display: flex;
        align-items: center;
        margin: 15px 10px;
    }

    #dashboardModal .modal-body .top div {
        display: inline-flex;
    }

    #dashboardModal .modal-body .top .image img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }


/*for camera icon*/
/*======================================================================*/
        #dashboardModal .modal-body .top .camera {
            display: block;
            width: calc(30px * .7);
            height: calc(30px * .5);
            position: absolute;
            top: calc(30px * .3);
            left: calc(30px * .15);
            background-color: gray;
            border-radius: calc(30px * .0667);
        }

        #dashboardModal .modal-body .top .camera:after {
            content: "";
            display: block;
            width: calc(30px * .37);
            height: calc(30px * .37);
            border: calc(30px * 0.0933) solid #fff;
            position: absolute;
            top: calc(30px * .5 * .1);
            left: calc(30px * .7 * .25);
            background-color: gray;
            border-radius: calc(30px * .2);
        }

        #dashboardModal .modal-body .top .camera:before {
            content: "";
            display: block;
            width: calc(30px * .7 * .5);
            height: calc(30px * .1333);
            position: absolute;
            top: calc(30px * .5 * -0.16);
            left: calc(30px * .7 * .25);
            background-color: gray;
            border-radius: calc(30px * .1333);
        }

        #dashboardModal .modal-body .top .icon {
            width: 30px;
            height: 30px;
            position: absolute;
            left: 66px;
            top: 66px;
            opacity: 0.8;
            background: white;
            border-radius: 50%;
        }

        #dashboardModal .modal-body .top .upload[type="file"] {
            position: absolute;
            opacity: 0;
            right: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            border-radius: 50%;
        }

/*======================================================================*/    

    #dashboardModal .modal-body .top .label h5 {
        padding: 0;
        margin: 0;
        margin-left: 30px;
    }

    #dashboardModal .modal-body .center {
        display: flex;
        align-items: stretch;
    }

    #dashboardModal .modal-body .center .left , #dashboardModal .modal-body .center .right {
        width: 50%;
        margin: 0 10px;
    }

    #dashboardModal .modal-body .center .head {
        text-align: left;
    }

    #dashboardModal .modal-body .center .label-input label {
        width: 100%;
        font-size: 13px;
    }

    #dashboardModal .modal-body .center .label-input input {
        width: 100%;
        padding: 8px;
        margin: 0 0 12px 0;
        border: 1px solid;
        box-sizing: border-box;
        border-color: white;
        background: white;
        color: black;
        font-size: 13px;
        border-radius: 5px;
        outline: none;
    }

    #dashboardModal .modal-body .bottom {
        margin: 10px;
    }

    #dashboardModal .modal-body .bottom button {
        background-color: #668d3c;
        color: white;
        padding: 8px;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
        font-size: 13px;
    }

    @media only screen and (max-width: 480px) {
        #dashboardModal .modal-body .top {
            display: block;
            text-align: center;
        }

        #dashboardModal .modal-body .top div {
            display: block;        
        }

        #dashboardModal .modal-body .top .label h5 {
            margin-left: 0;
        }

        #dashboardModal .modal-body .top .icon {
            margin-left: auto;
            margin-right: auto;
            left: 66px;
            right: 0;
            text-align: center;
        }

        #dashboardModal .modal-body .center {
            display: block;
        }

        #dashboardModal .modal-body .center .left , #dashboardModal .modal-body .center .right {
            width: 100%;
            margin: 0;
        }

        #dashboardModal .modal-body .bottom {
            margin: 0;
        }
    }

</style>

<!-- Large modal -->
<div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-lg modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-bg">
        <div>
            <form action="dashboard/updateaccount.php" method="post" enctype="multipart/form-data">
                <div class="modal-head">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">&times;</button>                
                    <h4>My Account</h4>
                </div>
                <div class="modal-body">
                    <div class="top">
                        <div class="image">
                            <img id="image" src="<?php echo $_SESSION["profilepicture"] ?>">
                            <span id="icon" class="icon">
                                <input type="file" id="upload" class="upload" name="image" onchange="displayPhoto()">
                                <a class="camera"></a>
                            </span>
                        </div>
                        <div class="label">
                            <h5>Welcome <?php echo $_SESSION["firstname"]?>!</h5>
                        </div>
                    </div>

                    <div class="center">
                        <div class="left">
                            <div class="head"><h6>Profile</h6></div>
                            <div class="label-input">
                                <label class="label">Member Since:</label>
                                <input class="input" type="text" value="<?php echo $_SESSION["membersince"]?>" readonly>
                            </div>
                            <div class="label-input">
                                <label class="label">Gender:</label>
                                <input class="input" name="gender" type="text" value="<?php echo $_SESSION["sex"]?>">
                            </div>
                            <div class="label-input">
                                <label class="label">First Name:</label>
                                <input class="input" name="firstname" type="text" value="<?php echo $_SESSION["firstname"]?>">
                            </div>
                            <div class="label-input">
                                <label class="label">Last Name:</label>
                                <input class="input" name="lastname" type="text" value="<?php echo $_SESSION["lastname"]?>">
                            </div>
                            <div class="label-input">
                                <label class="label">Birth Date:</label>
                                <input class="input" name="birthdate" type="text" value="<?php echo $_SESSION["birthdate"]?>">
                            </div>
                            <div class="label-input">
                                <label class="label">Email:</label>
                                <input class="input" type="email" value="<?php echo $_SESSION["email"]?>" readonly>
                            </div>
                            <div class="label-input">
                                <label class="label">Country:</label>
                                <input class="input" name="country" type="text" value="<?php echo $_SESSION["country"]?>">
                            </div>
                        </div>
                        <div class="right">
                            <div class="head"><h6>Shipping Address</h6></div>
                            <div class="label-input">
                                <label class="label">Address:</label>
                                <input class="input" name="shippingaddress" type="text" value="<?php echo $_SESSION["shippingaddress"]?>">
                            </div>
                            <div class="label-input">
                                <label class="label">City:</label>
                                <input class="input" name="shippingcity" type="text" value="<?php echo $_SESSION["shippingcity"]?>">
                            </div>
                            <div class="label-input">
                                <label class="label">State:</label>
                                <input class="input" name="shippingstate" type="text" value="<?php echo $_SESSION["shippingstate"]?>">
                            </div>

                            <div class="label-input">
                                <label class="label">Zipcode</label>
                                <input class="input" name="shippingzipcode" type="text" value="<?php echo $_SESSION["shippingzipcode"]?>">
                            </div>
                             <div class="label-input">
                                <label class="label">Country:</label>
                                <input class="input" name="shippingcountry" type="text" value="<?php echo $_SESSION["shippingcountry"]?>">
                            </div>
                            <div class="label-input">
                                <label class="label">Contact Number</label>
                                <input class="input" name="contactnumber" type="text" value="<?php echo $_SESSION["contactnumber"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <button class="btn-save" name="submit" type="submit">Update My Account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<!-- XL Services -->
<style>
    #servicesModal-xl{
        color: black;
    }
    #servicesModal-xl .modal-header{
        display: block;
    }
    .modal-xxl{
        max-width: 95vw;
        margin-top: 7vh;
        height: 80vh;
    }
</style>
<div id="servicesModal-xl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xxl">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            ...
      </div>
    </div>
  </div>
</div>


<!-- Paywall -->
<style>
    #paywallModal{
        color: black;
        font-size: 14px;
    }
    #paywallModal img{
        width: 40%;
    }
    #paywallModal .modal-body{
        text-align: center;
    }
    #paywallModal form{
        text-align: left;
    }
    #paywallModal .form-group{
        margin-top: 10px;
    }
    #paywallModal #cardVv{
        display: flex;
        flex-direction: row:
    }
    #paywallModal #cardVv .form-group input{
        width: 85%;
    }
    #paywallModal .modal-footer button{
        width: 100%;;
    }
</style>
<div id="paywallModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Get Access Now!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>$9.99 / Hour</h2>
        <p>Payment Via</p>
        <img src="authorize.png" alt="">
            <form action="Authorize.net/payment.php" method="post">
            <div class="form-group">
                <label>Card Number</label>
                <input type="text" name="card_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="XXXX XXXX XXX XXX" required>
            </div>
            <div id="cardVv">
                <div class="form-group">
                    <label>Card Expiry</label>
                    <input type="text" name="card_exp" class="form-control" id="exampleInputPassword1" placeholder="MM/YYYY" required>
                </div>
                <div class="form-group">
                    <label>CVV</label>
                    <input type="text" name="card_cvc" class="form-control" id="exampleInputPassword1" placeholder="123" required>
                </div>
            </div>
      </div>
      <div class="modal-footer">
            <button name="submit" type="submit" type="button" class="btn btn-primary">Get Access</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script>

    window.onclick = function(event) {
        if (event.target.className.indexOf("modal") !=-1) {
            $('#lhc_status_container').show();
        }
    }
    
    function closeModal() {
        $('#lhc_status_container').show();
    }
    function toggleLogin(){
        closeServices();
        $(".navbar-collapse").collapse('hide');
        $('#registerModal').modal('hide');
        $('#lhc_status_container').hide();
        $('#loginModal').modal('show');
    }
    function toggleRegister(){
        $(".navbar-collapse").collapse('hide');
        $('#loginModal').modal('hide');
        $('#lhc_status_container').hide();
        $('#registerModal').modal('show');
    }
    function toggleServices(){
        $(".navbar-collapse").collapse('hide');
        $('#lhc_status_container').hide();
        $('#servicesModal').modal('show');
    }
    function toggleServicesXL(){
        $(".navbar-collapse").collapse('hide');
        $('#lhc_status_container').hide();
        $('#servicesModal-xl').modal('show');
    }
    function closeServices(){
        $(".navbar-collapse").collapse('hide');
        $('#servicesModal').modal('hide');
    }
    function toggleDashboard(){
        $(".navbar-collapse").collapse('hide');
        $('#lhc_status_container').hide();
        $('#dashboardModal').modal('show');
    }
    
   
    function checkemail(email){
		
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		
		if (email.length == 0) {
			document.getElementById("email-notification").innerHTML = "";
	    return;
		}
		else if (email.match(mailformat)){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("email-notification").innerHTML = this.responseText;
                    if (this.responseText == "Email is already taken") {
						document.getElementById('register-btn').disabled = true;
					}
					else {
						document.getElementById('register-btn').disabled = false;
					}
				}
			};
			xmlhttp.open("GET", "checkemail.php?email=" + email, true);
			xmlhttp.send();
		}
		else{
			document.getElementById("email-notification").innerHTML = "You have entered an invalid email address!";
			document.getElementById('register-btn').disabled = true;
		}
	}

    function displayPhoto() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("upload").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("image").src = oFREvent.target.result;
        };
    }

</script>
