<?php 
	require_once 'afterlogin.php';
	require_once 'incs/header.php';
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h2>Change <span>Password</span></h2>
				<form id="changepass_form">
					<div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
						  <input type="password" class="form-control" placeholder="Current Password" name="log_cpass">				      
						</div>
						<div class="input-group">
						  <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
						  <input type="password" class="form-control" placeholder="New Password" name="log_npass">				      
						</div>
						<div class="input-group">
						  <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
						  <input type="password" class="form-control" placeholder="Confirm New Password" name="log_cnpass">				      
						</div>
						<div class="input-group">				      
						  <button type="button" class="btn btn-primary change_pass">Change Password</button>      
						</div>
					</div>
				</form>
				<div class="err_changepass"></div>
			</div>
		</div>
	</div>
</div>
<?php 
	require_once 'incs/footer.php';
?>