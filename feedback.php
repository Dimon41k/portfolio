<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	$title="contacts";
	require_once "blocks/head.php"	
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#done").click(function(){
				var name = $("#name").val();
				var email = $("#email").val();
				var tema = $("#tema").val();
				var message = $("#message").val();
			});
			$.ajax({
				url: 'ajax/feedback.php',
				type: 'post',
				cache: false,
				data: {'name':name, 'email': emeil, 'tema':tema, 'message': message},
				dataType: 'html',
				success: function(data){
					
						$('#show').html(data + "<div class='clear'><br></div>");
						$('#show').show();
				}
			});
		});
	</script>
</head>
<body>

<?php
require_once "blocks/header.php";
  ?>
<div class="clear"></div>
<content>
	<div class="left_column"></div>
	<div class="center_column">
		<input type="text" placeholder="name" name="name" id="name"><br/>
		<input type="text" placeholder="email" name="email" id="email"><br/>
		<input type="text" placeholder="tema" name="tema" id="tema"><br/>
		<textarea name="message" id="message"></textarea><br/>
		<input type="button"  name="done" id="done" value="send"><br/>
		<div id="show"></div>
	</div>
	<div class="right_column"></div>
</content>
<div class="clear"></div>

<?php 
require_once "blocks/footer.php"
 ?>
</body>
</html>