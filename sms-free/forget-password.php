<?php 
	require_once 'chklogin.php';
	require_once 'incs/header.php';
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h2>Forget password</h2>
				<form id="forget_form">
					<div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
						  <input type="email" class="form-control" placeholder="User Email" name="log_email">				      
						</div>
						<div class="input-group">				      
						  <button type="button" class="btn btn-primary forget_btn">Sign in</button>      
						</div>
					</div>
				</form>
				<div class="err_forget"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="welcome-block">
					<h2>Register</h2>
					<form id="register_form">
						<div class="form-group">
							<div class="input-group">
							  <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
							  <input type="text" class="form-control" placeholder="User Name" name="log_name">				      
							</div>
							<div class="input-group">
							  <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
							  <input type="email" class="form-control" placeholder="User Email" name="log_email">				      
							</div>
							<div class="input-group">
							  <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
							  <input type="text" class="form-control" placeholder="User Phone" name="log_mobile">				      
							</div>
							<div class="input-group">
							  <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
							  <input type="password" class="form-control" placeholder="User Password" name="log_pass">				      
							</div>
							<div class="input-group">
							  <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
							  <input type="password" class="form-control" placeholder="User Confirm password" name="log_cpass">				      
							</div>
							<div class="input-group">				      
							  <button type="button" class="btn btn-primary reg_btn">Sign up</button>     
							</div>
						</div>
					</form>
					<div class="err_reg"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	require_once 'incs/footer.php';
?>