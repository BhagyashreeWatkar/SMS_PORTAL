<?php 
	require_once 'afterlogin.php';
	require_once 'incs/header.php';
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h2>Contact <span>Person</span></h2>
				<?php
					$ans = $obj->show_person();
					//pre($ans);
					if(is_array($ans)):
						foreach($ans as $val):
				?>
				<ul class="list left-contact">
					<li><a href="#"><span><?php echo $val->per_name; ?></span><span>+91 <?php echo $val->per_mobile; ?></span></a></li>
				</ul>
				<?php
					endforeach;
					endif;
				?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h2>Send <span>Group SMS</span></h2>
				<div class="nmessage_form">
					<form id="group_form">
						<div class="form-group">	
							<div class="input-group clearfix">
							  <input type="text" class="form-control" id="exampleInput" placeholder="Add Contact Person in group" name="pre_name">      
							</div>
							<div class="input-group">
								<textarea type="text" class="form-control" id="exampleInputMessage" placeholder="Add Message" name="me_name"></textarea> 
							</div>
							<div class="input-group">				      
							  <button type="button" class="btn btn-primary group_btn">Send SMS</button>		      
							</div>
						</div>
					</form>
					<div class="err_group"></div>
				</div>
				
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<h2>Message <span>Library</span></h2>				
				<div class="show-block">
					<div class="form-group">
						<div class="input-group">
							<select class="select-group">
								<option>Jokes</option>
								<option>Good Morning</option>
								<option>Good Night</option>
							</select>
						</div>
						<div class="input-group">
							<textarea type="text" class="form-control" id="exampleInputMessage" placeholder="Show Message" name="me_name"></textarea> 
						</div>
					</div>
				</div>
				<div class="group_form">					
					<form id="group_form">
						<div class="form-group">
							<div class="input-group">
							  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Add Group" name="gr_name">      
							</div>
							<div class="input-group">				      
							  <button type="button" class="btn btn-primary gr_btn">Add Group</button>		      
							</div>
						</div>
					</form>
					<div class="err_group"></div>
				</div>
			</div>
		</div>
	</div><br/>
</div>
<?php 
	require_once 'incs/footer.php';
?>