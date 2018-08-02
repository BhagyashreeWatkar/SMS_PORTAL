<?php 
	require_once 'afterlogin.php';
	require_once 'incs/header.php';
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<h2>Create <span>Message</span></h2>
				<div class="nmessage_form">
					<form id="nmessage_form">
						<div class="form-group">					
							<div class="input-group clearfix">
								<?php 
									$obj->dropdown("ca_id,ca_name","sms_category","1 order by ca_name asc","sms_caid");
								?>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group clearfix">
								<textarea type="text" class="form-control" placeholder="Add Message" name="sms_msg" rows="8" cols="30" maxlength="300" id="textarea"></textarea> 
							</div>
							<div id="textarea_feedback"></div>
							<div class="input-group">				      
							  <button type="button" class="btn btn-primary msg_btn">Add Message</button>		      
							</div>
						</div>
					</form>
					<div class="err_nmessage"></div>
				</div>				
			</div>
			<!--<div class="col-lg-offset-1 col-md-5 col-sm-12 col-xs-12">
				<h2>Show <span>Message</span></h2>
			</div>-->
		</div>
	</div><br/>
</div>
<?php 
	require_once 'incs/footer.php';
?>