<?php 
	require_once 'afterlogin.php';
	require_once 'incs/header.php';
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h2>Add <span>Contact Person</span></h2>
				<div class="nmessage_form">
					<form id="person_form">
						<div class="form-group">	
							<div class="input-group clearfix">
								
								<?php 
									$obj->dropdown("gr_id,gr_name","sms_group","1 order by gr_name asc","per_grid");
								?>
							</div>
						</div>
						<div class="form-group">	
							<div class="input-group clearfix">
							  <input type="text" class="form-control" id="exampleInput" placeholder="Name" name="per_name">      
							</div>
							<div class="input-group clearfix">
							  <input type="text" class="form-control" id="exampleInput" placeholder="Mobile No." name="per_mobile">      
							</div>
							<div class="input-group">				      
							  <button type="button" class="btn btn-primary per_btn">Add Contact</button>		      
							</div>
						</div>
					</form>
					<div class="err_per"></div>
				</div>				
			</div>
			<div class="col-lg-offset-1 col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<h2>Contact <span>Person</span></h2>
				<?php
					$ans = $obj->show_person();
					//pre($ans);
					if(is_array($ans)):
						foreach($ans as $val):
				?>
				<ul class="list">
					<li><span><?php echo $val->per_name; ?></span><span>+91 <?php echo $val->per_mobile; ?></span></li>
				</ul>
				<?php
					endforeach;
					endif;
				?>
			</div>			
		</div>
	</div><br/>
</div>
<?php 
	require_once 'incs/footer.php';
?>