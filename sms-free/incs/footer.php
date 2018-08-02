<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright-block">
					Copyright &copy; <span id="copyright-year"></span> SMS Free. All rights reserved.
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/flexy-menu.js"></script>
<script src="assets/js/project.js"></script>
<script type="text/javascript">
	var currentYear = (new Date).getFullYear();
    $(document).ready(function() {
        $(".flexy-menu").flexymenu({
            speed: 400,
            indicator: true
        });
		
		
		$("#copyright-year").text( (new Date).getFullYear() );
		
		var text_max = 300;
		$('#textarea_feedback').html(text_max + ' Characters Remaining');

		$('#textarea').keyup(function() {
			var text_length = $('#textarea').val().length;
			var text_remaining = text_max - text_length;

			$('#textarea_feedback').html(text_remaining + ' characters remaining');
		});
    });
	
	
	
</script>
</body>
</html>