<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Health Care Management</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
    <style type="text/css">
	body
	{
		background-image:url(images/11.jpg);
		background-repeat:no-repeat;
		background-size:cover;
	}
	table
	{
		color:#F00;
	}
	</style>
     <?php 
  session_start();
  if($_SESSION['uid']=="" || $_SESSION['uid']=='null')
  header('location:index.html');
  ?>
</head>

<body>



	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="left_side">
						<li>
							<a href="login.html">
								<i class="fa fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-behance"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="login.html">
								<i class="lnr lnr-phone-handset"></i>
								04734345678
							</a>
						</li>
						<li>
							<a href="#">
								<i class="lnr lnr-envelope"></i>
								hospital@gmail.com
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<H2>E-HEALTH</H2>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="adminhomepage.php">Home</a>
									</li>
                                     <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add</a>
										<ul class="dropdown-menu">
                                        <li class="nav-item">
												<a class="nav-link" href="dept.php">Department</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="doctor registration.php">Add Doctor</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="doctorview.php">View Doctor</a>
											</li>
                                            
                                             <li class="nav-item">
												<a class="nav-link" href="labast.php">Lab Assistant</a>
											</li>
                                            <li class="nav-item">
												<a class="nav-link" href="amb.php">Ambulance</a>
											</li>
                                            </ul>
									
                                    <li class="nav-item">
												<a class="nav-link" href="patientviewapp.php">Patient Appointments</a>
											</li>
									
                                    <li class="nav-item">
												<a class="nav-link" href="patientview.php">Patient Prescriptions</a>
											</li>
                                          <!-- <li class="nav-item active">
										<a class="nav-link" href="appointment.php">Appointment</a>
									</li>-->
									
                                   
                                            <li class="nav-item">
												<a class="nav-link" href="paymentview.php">Payment</a>
											</li>
                                            <li class="nav-item">
												<a class="nav-link" href="feedbackview.php">Feedback</a>
									      </li>
                                            <!-- <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payment</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="payment.php">Add Payment</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="paymentview.php">View Payment</a>
											</li>
                                            </ul>-->
                                            
                                   
                                    <li class="nav-item">
												<a class="nav-link" href="logout.php">Logout</a>
											</li>

									<!--<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="about.html">About</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="services.html">Services</a>
											</li>
                                            
											<li class="nav-item">
												<a class="nav-link" href="elements.html">Elements</a>
											</li>
										</ul>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="blog.html">Blog</a>
											</li>
											<li class="nav-item">
											
                                         
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
								</ul>-->
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<h1 align="center">AMBULANCE DETAILS </h1>
<form action="ambaction.php"  onSubmit="return check();">
<table align="center">
<tr><th>NO OF AMBULANCE:&nbsp;&nbsp;&nbsp;</th>
<td><input type="text" name="t1" id="t1" required="yes" class="btn btn-primary"></td></tr>
<tr><td>&nbsp&nbsp;&nbsp;</td></tr>
<tr><th>DRIVER NAME:&nbsp;&nbsp;&nbsp;</th>
<td><input type="text" name="t2" required="yes" class="btn btn-primary" >
</td></tr>
<tr><td>&nbsp&nbsp;&nbsp;</td></tr>
<tr><th>FACILITY:&nbsp;&nbsp;&nbsp;</th>
<td><input type="text" name="t3" id="t3" required="yes" class="btn btn-primary"></td></tr>
<tr><td>&nbsp&nbsp;&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class="btn btn-primary"></td></tr>
</table>
</form>
<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>