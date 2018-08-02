$(document).ready(function(){

	///// Registration /////////////////

	$(".reg_btn").click(function(){
		$.ajax({
			type: 'post',
			url: 'controller/register_action.php',
			data:$("#register_form").serialize(),
			success:function(answer_from_actionpage)
			{
				$(".err_reg").html("Loding...");
				setTimeout(function(){
					if(answer_from_actionpage==1)
					{
						$(".err_reg").html("User Added");
						$(".form-control").val("");
					}
					else{
						$(".err_reg").html(answer_from_actionpage);
					}
				},1000);
			}
		})
	});

	///// Login /////////////////

	$(".log_btn").click(function(){
		$.ajax({
			type: 'post',
			url:'controller/login_action.php',
			data:$("#login_form").serialize(),
			success:function(answer_from_actionpage){
				//alert(answer_from_actionpage);
				
				if(answer_from_actionpage==1){
					window.location.href="index.php";
				}
				else{
					$(".err_log").html(answer_from_actionpage);
				}
			}
		})
	});
	
	
	///// Change Password //////////////
	
	$(".change_pass").click(function(){
		$.ajax({
			type:'post',
			url:'controller/change_password.php',
			data:$("#changepass_form").serialize(),
			success:function(answer_from_actionpage){
				$(".err_changepass").html(answer_from_actionpage);
			}
		})
	});
	
	/////  Add Category or Group ////////////
	
	$(".group_form").hide();
	$(".radio_cagr").change(function(){
		//alert (1);
		var ans = $(this).is(":checked");
		//alert (ans);
		
		var record = $(this).val();
		//alert(record);
		
		if(record==1){
			$(".group_form").slideUp();
			$(".category_form").slideDown();
		}
		else{
			$(".group_form").slideDown();
			$(".category_form").slideUp();
		}
	});
	
	$(".cat_btn").click(function(){
		$.ajax({
			type:'post',
			url:'controller/category_action.php',
			data:$("#category_form").serialize(),
			success:function(answer_from_actionpage){
				//$(".err_cat").html(answer_from_actionpage);
				
				$(".err_cat").html("Loding...");
				
				setTimeout(function(){
					if(answer_from_actionpage==1){
						$(".err_cat").html("Category Added");
						$(".form-control").val("");
					}
					else{
						$(".err_cat").html(answer_from_actionpage);
					}
				},1000);
			}
		})
	});
	
	
	$(".gr_btn").click(function(){
		$.ajax({
			type:'post',
			url:'controller/group_action.php',
			data:$("#group_form").serialize(),
			success:function(answer_from_actionpage){
				//$(".err_group").html(answer_from_actionpage);	
				$(".err_group").html("Loding...");
				
				setTimeout(function(){
					if(answer_from_actionpage==1){
						$(".err_group").html("Group Added");
						$(".form-control").val("");
					}
					else{
						$(".err_group").html(answer_from_actionpage);
					}
				},1000);				
			}
		})
	});
	
	
	$(".per_btn").click(function(){	
		$.ajax({
			type:'post',
			url:'controller/person_action.php',
			data:$('#person_form').serialize(),
			success:function(answer_from_actionpage){
				$(".err_per").html("Loding...");
				setTimeout(function(){
					if(answer_from_actionpage==1){
						$(".err_per").html("Contact added");
						$(".form-control").val("");
					}
					else{
						$(".err_per").html(answer_from_actionpage);
					}
				},1000);
			}
		})
	});
	
	
	$(".msg_btn").click(function(){
		$.ajax({
			type:'post',
			url:'controller/create_message.php',
			data:$('#nmessage_form').serialize(),
			success:function(answer_from_actionpage){
				//$(".err_nmessage").html(answer_from_actionpage);
				$(".err_nmessage").html("Loding...");
				setTimeout(function(){
					if(answer_from_actionpage==1){
						$(".err_nmessage").html("Message added");
						$(".form-control").val("");
					}
					else{
						$(".err_nmessage").html(answer_from_actionpage);
					}
				},1000);
			}
		})
	});
	
	$(".gr_details").click(function(){
		var result = $(this).attr("id");

		$.ajax({
			type:"post",
			data:"gr_id="+result,
			url:"controller/showcontact_action.php",
			success:function(answer_from_actionpage){
				$("#contacts").html(answer_from_actionpage);
			}
		});
	});
	
	
	$(".msg_details").click(function(){
		var result = $(this).attr("id");
		//var ca_name = ans;
		//var record = "ca_name="+ca_name;
		
		$.ajax({
			type:'post',
			data:"ca_id="+result,
			url:'controller/showmsg_action.php',
			success:function(answer_from_actionpage){
				$("#showmessage").html(answer_from_actionpage);			
			}
		
		});
	});
	
	
	$(".send_btn").click(function(){
		$.ajax({
			type:'post',
			url:'controller/sms_action.php',
			data:$('#sms_form').serialize(),
			success:function(answer_from_actionpage){
				$(".err_send").html("Loding...");
				setTimeout(function(){
					if(answer_from_actionpage==1){
						$('.err_send').html("Message Send Successfully.");
						$('.form-control').val('');					
					}
					else{
						$('.err_send').html(answer_from_actionpage);
					}
				},1000);
			}
		});
	});
	
	
	

});