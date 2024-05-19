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
	background-image:url(images/N.jpg);
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
										<a class="nav-link" href="Patienthomepage.php">Home</a>
									</li>
                                      <li class="nav-item ">
										<a class="nav-link" href="patientupdate.php">My Profile</a>
									</li>
                                     <li class="nav-item ">
										<a class="nav-link" href="viewdept.php">Departments</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="docuserview.php">Doctor</a>
									</li>
                                  
                                    <li class="nav-item ">
										<a class="nav-link" href="appointmentviewp.php">Appointment</a>
									</li>
                                   
								<!--	<li class="nav-item ">
										<a class="nav-link" href="labrepuserview.php">Labreport</a>
									</li>-->
                                   <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View</a>
										<ul class="dropdown-menu">
                                      
                                    <li class="nav-item">
												<a class="nav-link" href="preuserview.php">Prescription</a>
											</li>
                                            <li class="nav-item">
												<a class="nav-link" href="result.php">Test </a>
											</li>
                                            </ul>
                                            </li>
									<!--<li class="nav-item ">
										<a class="nav-link" href="ambuserview.php">Ambulance</a>
									</li>-->
                                   
											<li class="nav-item">
												<a class="nav-link" href="payuserview.php">Payment</a>
									      </li>
                                           </li>
                         <li class="nav-item">
												<a class="nav-link" href="feedback.php">Feedback</a>
									      </li>
                         
                                            <li class="nav-item ">
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
    <br>
<h1 align="center">DOCTOR VIEW</h1>
<table border="2" align="center">
<tr><th>Doctor Id</th>
<th>Doctor Name</th>
<th>Specialisation</th>
<th>Address</th>
<th>Phone Number</th>
<th>Email Id</th>
<th>Gender</th>
<th>Qualification</th>
<th>Day</th>

<th>Time</th></tr>
<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$q="select * from doctor";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
    <tr><td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
        <td><?php echo $row['specialisation'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['phno'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['qualification'];?></td>
        <td><?php echo $row['da'];?></td>

    <td><?php echo $row['time'];?></td>
    <td><?php echo "<img src='uploads/".$row['img']."'width='150px' height='100px'";?></td>
    <td><a href="appointment.php?id=<?php echo $row['id'];?>"><font color="#FFFF00">APPOINTMENT</font></a></td>
   <!-- <td><a href="doctordelete.php?id=<?php echo $row['id'];?>">Delete</a></td>-->
    </tr>
    <?php
}
?>
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
 </table>
 </body>
 </html>   
