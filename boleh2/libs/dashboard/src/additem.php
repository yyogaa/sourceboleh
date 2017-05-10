<?php
 ob_start();
 session_start();
 if( isset($_SESSION['penjual'])!="" ){
  header("Location: dashboard.php");
 }

include('dbconnect.php');
include('action_upload.php');

 $error = false;

 if ( isset($_POST['btnUpload']) ) {
  // clean user inputs to prevent sql injections
  $namei = trim($_POST['nmbr']);
  $namei = strip_tags($namei);
  $namei = htmlspecialchars($namei);

  $harga = trim($_POST['hrgbr']);
  $harga = strip_tags($harga);
  $harga = htmlspecialchars($harga);

  $stock = trim($_POST['stbr']);
  $stock = strip_tags($stock);
  $stock = htmlspecialchars($stock);

  $gambar = trim($_POST['gbbr']);
  $gambar = strip_tags($gambar);
  $gambar = htmlspecialchars($gambar);

  $ket = trim($_POST['ktbr']);
  $ket = strip_tags($ket);
  $ket = htmlspecialchars($ket);

  // basic name validation
//  if (empty($name)) {
//   $error = true;
//   $nameError = "Please enter your full name.";
//  } else if (strlen($name) < 3) {
//   $error = true;
//   $nameError = "Name must have atleat 3 characters.";
//  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
//   $error = true;
//   $nameError = "Name must contain alphabets and space.";
//  }

  //basic email validation
//  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
//   $error = true;
//   $emailError = "Please enter valid email address.";
//  } else {
   // check email exist or not
//   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
//   $result = mysql_query($query);
//   $count = mysql_num_rows($result);
//   if($count!=0){
//    $error = true;
//    $emailError = "Provided Email is already in use.";
//   }
//  }
  // password validation
//  if (empty($pass)){
//   $error = true;
//   $passError = "Please enter password.";
//  } else if(strlen($pass) < 6) {
//   $error = true;
//   $passError = "Password must have atleast 6 characters.";
  //}

  // password encrypt using SHA256();
//  $password = hash('sha256', $pass);

  // if there's no error, continue to signup
//  if( !$error ) {

   $query = "INSERT INTO items(namaItem,harga,stock,pic,keterangan) VALUES('$namei','$harga','$stock','$gambar','$ket')";
   $res = mysql_query($query);

   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($namei);
    unset($harga);
    unset($stock);
    unset($gambar);
    unset($ket);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later...";
   }

//  }

 }

?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
	        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		    Tip 2: you can also add an image using data-image tag

			-->

			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					BOLEH
				</a>
			</div>


	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li>
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.php">
	                        <i class="material-icons">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="table.php">
	                        <i class="material-icons">content_paste</i>
	                        <p>Update Barang</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="typography.php">
	                        <i class="material-icons">library_books</i>
	                        <p>Typography</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="icons.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Icons</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="maps.php">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.php">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
					<li class="active-pro">
                        <a href="upgrade.php">
	                        <i class="material-icons">unarchive</i>
	                        <p>Upgrade to PRO</p>
	                    </a>
                    </li>
	            </ul>
	    	</div>
		</div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Update Barang</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tambah Barang</h4>
	                                <p class="category">Silahkan Tambah Barang Baru</p>
	                            </div>
	                            <div class="card-content table-responsive">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
																	<?php
																			if ( isset($errMSG) ) {
																	?>

																		<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
																				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
																	 </div>

																	<?php
																			}
																	?>
                                    <table class="table" cellpadding="0" cellspacing="0" align="center">
                                      <tr>
                                        <td width="100">Nama</td>
                                        <td><input type="text" name="nmbr" max length="40" value="<?php echo $namei ?>"/></td>
                                      </tr>
                                      <tr>
                                        <td width="100">Harga</td>
                                        <td><input type="number" name="hrgbr" max length="40" value="<?php echo $harga ?>"/></td>
                                      </tr>
																			<tr>
																				<td width="100">Stock Barang</td>
																				<td><input type="text" name="stbr" max length="40" value="<?php echo $stock ?>"/></td>
																			</tr>
                                      <tr>
                                        <td width="100">File</td>
                                        <td><input type="file" name="gbbr" /></td>
                                      </tr>
                                      <tr>
                                        <td width="100" valign="top">Keterangan</td>
                                        <td><textarea name="ktbr" cols="30" rows="3"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td><input type="submit" class="btn btn-primary" name="btnUpload" value="Tambah" /></td>
                                      </tr>
                                    </table>
                                </form>
	                            </div>
	                        </div>
	                    </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Company
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
