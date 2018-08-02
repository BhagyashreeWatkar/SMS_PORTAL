<?php 
	require_once 'afterlogin.php';
	require_once 'incs/header.php';
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h2>Contact <span>Group</span></h2>
				<?php
					$ans = $obj->show_group();
					//pre($ans);
					if(is_array($ans)){
						foreach($ans as $val){
							echo "<span class='gr_details' id='$val->gr_id' style='cursor:pointer'> $val->gr_name </span>";
							echo "<br/>";
						}
					}
					else{
						echo "Create library first <a href='group_sms.php'>Click here</a>";
					}
						
				?>
				<h2>Show <span>Contacts</span></h2>
				<div id="contacts"></div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h2>Send <span>SMS</span></h2>
				<div class="nmessage_form">
					<form id="sms_form">
						<div class="form-group">	
							<div class="input-group clearfix">
							  <input type="text" class="form-control" id="per_name" placeholder="Add Contact Person" name="per_name">      
							</div>
							<div class="input-group clearfix">
							  <input type="text" class="form-control" id="per_mobile" placeholder="Add Mobile No." name="per_mobile">      
							</div>
							<div class="input-group clearfix">
								<textarea type="text" class="form-control" id="message" placeholder="Add Message" name="me_name"></textarea> 
							</div>
							<div class="input-group">				      
							  <button type="button" class="btn btn-primary send_btn">Send SMS</button>		      
							</div>
						</div>
					</form>
					<div class="err_send"></div>
				</div>
				
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<h2>Message <span>Library</span></h2>
				<?php
					$ans = $obj->show_category();
					// pre($ans);
					if(is_array($ans)){
						foreach($ans as $val){
							echo "<span class='msg_details' id='".$val->ca_id."' style='cursor:pointer'> $val->ca_name </span>";
							echo "<br/>";
						}
					}
					else{
						echo "Create Message first <a href='create_message.php'>Click here</a>";
					}
						
				?>
				<h2>Show <span>Message</h2>
				<div id="showmessage"></div>
			</div>
		</div>
	</div><br/>
</div>
<?php 
	require_once 'incs/footer.php';
?>