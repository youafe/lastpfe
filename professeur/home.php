<?php 
include "../setting/config.php";
 session_start();
if(!$_SESSION['t_user'])
{
	
	header("location:index.php");
}
else
{
	$t_username = $_SESSION['t_user'];
	$t_name = $ravi->teacher_info_select($t_username);
	$teacher_name_display = $t_name->fetch_assoc();
}


?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>

	<!--//skycons-icons-->
</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">

					<div class="clearfix"></div>
				</div>
				<!-- //header-ends -->
				<div class="outter-wp">
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<h2 class="inner-tittle">Welcome,
									<?php echo ucfirst($teacher_name_display['t_fullname']); ?> </h2>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Information</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span>Change Password</span></a></li>
											<li><a href="#section-3" class="icon-truck"> <span>Results</span></a></li>
										</ul>
									</nav>
									<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong>Personal Information</strong>
												<p> <strong>WELCOME</strong>,
													<?php echo ucfirst($teacher_name_display['t_fullname']); ?>
												</p>
											
												<p><strong>Gender: </strong>
													<?php echo ucfirst($teacher_name_display['t_gender']); ?>
												</p>
												<p> <strong>Date of Birth:</strong>
													<?php echo ucfirst($teacher_name_display['t_dob']); ?>
												</p>

											</div>
											<div class="mediabox">
												<strong>Contact Details</strong>

												<p> <strong>Address:</strong>
													<?php echo ucfirst($teacher_name_display['t_address']); ?>
												</p>
												<p> <strong>Qualification:</strong>
													<?php echo ucfirst($teacher_name_display['t_qualification']); ?>
												</p>
												<p> <strong>Username:</strong>
													<?php echo ucfirst($teacher_name_display['t_username']); ?>
												</p>
											</div>
											<div class="mediabox">
												<strong>Parents Detail</strong>
												<p><strong>Father Name: </strong>
													<?php echo ucfirst($teacher_name_display['t_father']); ?>
												</p>
												<p><strong>Mother Name: </strong>
													<?php echo ucfirst($teacher_name_display['t_mother']); ?>
												</p>
												<p><strong>Parents Contact: </strong>
													<?php echo ucfirst($teacher_name_display['t_contact']); ?>
												</p>
											</div>
										</section>
										<section id="section-2">
										
											
											<div class="col-md-12">
												<?php 
												if(isset($_POST['change_password']))
												{
													
													$prev_password = $teacher_name_display['t_pass'];
													$old_password = $_POST['old_password'];
													
													if($prev_password!=$old_password)
													{ 
														echo "<script>alert('Old Password Does not Matched');</script>";	
													}
													else
													{
														$t_username = $teacher_name_display['t_username'];
													$t_password_update = $_POST['new_password'];
														$update_success = $ravi->teacher_password_change($t_password_update,$t_username);
														print_r($update_success);
													
													if($update_success==true)
													{
													echo "<script>window.location = 'home.php?success';</script>";
													}
														else
														{
															echo "<script>alert('cant update password');</script>";
														}
													}
													
												}
										
												?>
												<form method="post">
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input type="password" class="form-control1 icon" name="old_password" placeholder="Old Password">
													
												</div>
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input type="password" class="form-control1 icon" placeholder="New Password" name="new_password">
													
												</div>	
										
													<input type="submit" name="change_password" class="a_demo_four" value="Change Password">
													</form>
											</div>
										</section>								
									
										<section id="section-3">
											<div class="mediabox">

											</div>
											<div class="mediabox">

											</div>
											<div class="mediabox">

											</div>
										</section>
									</div>
									<!-- /content -->
								</div>
								<!-- /tabs -->

							</div>
							<script src="js/cbpFWTabs.js"></script>
							<script>
								new CBPFWTabs(document.getElementById('tabs'));
							</script>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--//tabs-inner-->

				<!--footer section start-->
				<footer>
					<p>&copy 2020 Augment . All Rights Reserved | Design by samali/outbainout/afegrouch</p>
				</footer>
				<!--footer section end-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<a href="index.html"><img src="images/admin.jpg"></a>
				<a href="index.html"><span class=" name-caret"><?php echo $teacher_name_display['t_fullname']; ?></span></a>
				<p>Teacher</p>
				<ul>
					<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
					<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
					<li><a class="tooltips" href="logouts.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>

			
				

				
	
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<link rel="stylesheet" href="css/vroom.css">
	<script type="text/javascript" src="js/vroom.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>