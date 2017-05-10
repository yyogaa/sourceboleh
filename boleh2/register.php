<?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }
 include_once 'dbconnect.php';

 $error = false;

 if ( isset($_POST['btn-signup']) ) {

  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  $alamat = trim($_POST['alamat']);
  $alamat = strip_tags($alamat);
  $alamat = htmlspecialchars($alamat);

  $nohp = trim($_POST['nohp']);
  $nohp = strip_tags($nohp);
  $nohp = htmlspecialchars($nohp);

  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }

  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }

  //alamat
//  if (strlen($alamat) < 5) {
//   $error = true;
//   $alamatError = "Alamat tidak valid";

   //hp
//   if (strlen($nohp) < 11) {
//    $error = true;
//    $nohpError = "Nomor telepon kurang/tidak valid";


  // password encrypt using SHA256();
  $password = hash('sha256', $pass);

  // if there's no error, continue to signup
  if( !$error ) {

   $query = "INSERT INTO users(userName,userEmail,userPass,address,phone) VALUES('$name','$email','$password','$alamat','$nohp')";
   $res = mysql_query($query);

   if ($res) {
    $errTyp = "success";
    $errMSG = "Berhasil daftar, silahkan masuk untuk mulai berbelanja !";
    unset($name);
    unset($email);
    unset($pass);
    unset($alamat);
    unset($nohp);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later...";
   }

  }

 }

?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BO-LEH</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header" >
	<div class="top-header" >
		<div class="container">
		<div class="top-head" >
			<div class="header-para">
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>

				</ul>
			</div>

			<ul class="header-in">
				<li><a href="404.html">about us</a> </li>
				<li><a href="contact.html">   contact us</a></li>
				<li><a href="signin.php">   Login</a></li>
				<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
			</ul>
			<div class="search-top">
				<div class="search">
					<form>
						<input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" value="" >
					</form>
				</div>
				<div class="world">
					<ul >
						<li><a href="#"><span> </span></a> </li>
						<li><select class="in-drop">
							  <option>EN</option>
							  <option>DE</option>
							  <option>ES</option>
							</select>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->

		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
				<a href="home.php"><img src="images/logo4.png" alt="" ></a>
			</div>
      <div class="top-nav">
  			  <ul class="megamenu skyblue">
  				  <li class="active grid"><a  href="makanan.php">Makanan</a>
  					<li class="active grid"><a  href="cinderamata.php">Cinderamata</a>
  			  </ul>
  		</div>


			<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty"><img src="images/cart-c.png"  alt=""></a></p>
						<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<div class="container">
		<div class="content-top-blue">
		<h2 class="new">Register</h2>
		</div>
</div>

<div class="card-content table-responsive">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <?php
        if ( isset($errMSG) ) {
    ?>

      <div align='center' class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
          <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
     </div>

    <?php
        }
    ?>
      <table width="600px" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td width="100">Nama *</td>
          <td><input type="text" class="form-control" name="name" placeholder="Masukan Username" max length="40" value="<?php echo $name ?>"/><span class="text-danger"><?php echo $nameError; ?></span></td>
        </tr>
        <tr>
          <td width="100">Email *</td>
          <td><input type="email" class="form-control" name="email" placeholder="Masukan Email Valid" max length="50" value="<?php echo $email ?>"/><span class="text-danger"><?php echo $emailError; ?></span></td>
        </tr>
        <tr>
          <td width="100">Password *</td>
          <td><input type="password" class="form-control" name="pass" placeholder="Masukan Password" max length="20"/><span class="text-danger"><?php echo $passError; ?></span></td>
        </tr>
        <tr>
          <td width="100">Alamat</td>
          <td><input type="text" class="form-control" name="alamat" placeholder="Masukan alamat" max length="100" value="<?php echo $alamat ?>"/></td>
        </tr>
        <tr>
          <td width="100">Nomor Telepon</td>
          <td><input type="number" class="form-control" name="nohp" placeholder="Masukan Nomor Telepon" max length="12" value="<?php echo $nohp ?>"/></td>
        </tr>
        <tr>
          <td><input type="submit" class="btn btn-block btn-primary" name="btn-signup"></td>
        </tr>
      </table>
      <p align='center'>* Wajib di isi</p>
  </form>
 </div>
		<!---->
    <div class="clearfix"> </div>
    <div class="clearfix"> </div>
    <br/>
    <br/>
    <br/>

</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="index.php"><img src="images/logo4.png" alt=""></a>
				<p class="footer-class">© 2017 BO-LEH | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.html">about us</a> </li>
					<li><a href="contact.html">   contact us</a></li>
					<li ><a href="products.html" >  our stores</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left">
				<ul class="term">
					<li><a href="#">terms and conditions</a> </li>
					<li ><a href="#" >  testimonials</a></li>
				</ul>
				<ul class="term">
					<li><a href="#">join us</a> </li>


				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>WE SUPPORT</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear'
					 		};
							*/

							$().UItoTop({ easingType: 'easeOutQuart' });

						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>

</body>
</html>
<?php ob_end_flush(); ?>
