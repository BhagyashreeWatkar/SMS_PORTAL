<?php 
	require_once 'afterlogin.php';
	require_once 'incs/header.php';
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h2>Library</h2>
				<?php
					$ans = $obj->show_category();
					//pre($ans);
					if(is_array($ans)):
					foreach($ans as $val):
				?>
				<ul class="list">
					<li><a href="#"><?php echo $val->ca_name; ?></a></li>
				</ul>
				<?php
					endforeach;
					endif;
				?>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h2>Add <span>Library / Group</span></h2>
				<p><input type="radio" name="btn_cagr" value="1" class="radio_cagr" checked="checked"> Category &nbsp;
					<input type="radio" name="btn_cagr" value="2" class="radio_cagr"> Group</p>
				<div class="category_form">
					<form id="category_form">
						<div class="form-group">
							<div class="input-group">
							  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Add Category" name="ca_name">      
							</div>
							<div class="input-group">				      
							  <button type="button" class="btn btn-primary cat_btn">Add Category</button>		      
							</div>
						</div>
					</form>
					<div class="err_cat"></div>
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
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h2>Group</h2>
				<?php
					$ans = $obj->show_group();
					//pre($ans);
					
					if(is_array($ans)):
					foreach($ans as $val):
				?>
				<ul class="list">
					<li><a href="#" <?php echo $val->gr_id; ?>><?php echo $val->gr_name; ?></a></li>
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