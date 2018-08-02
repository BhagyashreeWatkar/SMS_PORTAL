<?php 
	require_once 'model/db_project.php';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SMS FREE</title>
	<?php require_once 'embeds.php';?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
					<div class="pull-right">
						<?php
							if(!isset($_SESSION['for_name'])):
						?>
						<ul class="login-menu login-top-padd">
							<li><a href="login.php"><i class="glyphicon glyphicon-user"></i> Login / Register</a></li>
						</ul>
						<?php
							endif;
						?>
						
						<?php
							if(isset($_SESSION['for_name'])):
						?>
						<ul class="login-menu login-top-padd">
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Welcome <?php echo $_SESSION['for_name'];?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="changepass.php">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>							
							</li>
							
						</ul>
						<?php
							endif;
						?>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<figure class="logo">
						<a href="index.php"><img src="assets/images/logo.png" alt="SMS Free" class="img-responsive"></a>
					</figure>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<ul class="flexy-menu main-menu">
						<li <?php active('index.php');?>><a href="index.php">Home</a></li>
						<li <?php active('about-us.php');?>><a href="about-us.php">About Us</a></li>
						<li <?php active('contact-us.php');?>><a href="contact-us.php">Contact Us</a></li>
					</ul>
				</div>
			</div>			
		</div>
	</header>
	<?php
		if(isset($_SESSION['for_name'])):
	?>
	<div class="menu-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="flexy-menu orange">						
						<li <?php active('library.php');?>><a href="library.php">Library / Group</a></li>
						<li <?php active('create-message.php');?>><a href="create-message.php">Create Message</a></li>
						<li <?php active('add-contact.php');?>><a href="add-contact.php">Add Contact</a></li>
						<li <?php active('send-sms.php');?>><a href="send-sms.php">Send SMS</a></li>
						<li <?php active('group-sms.php');?>><a href="group-sms.php">Group SMS</a></li>
						<li <?php active('sent-sms.php');?>><a href="sent-sms.php">Sent SMS</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
		endif;
	?>