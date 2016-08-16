 <!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Forms Submit without Page Refresh using jQuery and Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){	
			$(".register").click(function(){
				//var data = $("#registration_Form").serialize();
				var data = {
					registration : $("#registration_Form").serializeArray(),
					submit: 1,
				};
				$.ajax({
					type:"post",
					//url: 'submit1.php',
					url: 'submit.php',
					data: data,
					success :  function(data){
						$("#registration_Form").fadeOut(500).hide(function(){
							$(".result_1").fadeIn(500).show(function()
							{	
								$(".result_1").html(data);
							});
						});
						
				    },
					error: function(data) {
						successmessage = 'Error';
						$(".result_1").text(successmessage);
					},
					
				});
				return false;
			});
		});
	</script>
<style type="text/css">
#container
{
	margin:50px auto;
	padding:36px;
	border:solid blue 1px;
	width:683px;
	background:azure;
}

</style>
	
</head>

<body>
<div id="container">
	<div class="container">
		<h4><label>PHP Forms Submit without Page Refresh using jQuery and Ajax</label></h4><br/><br/>
		<div class="row">
		  <div class="col-md-6">
				<div class="row">
					<div class="result_1">
					<form method="post" id="registration_Form">
					  <div class="form-group">
						<label for="nametext">Name</label>
						<input type="text" name="name" class="form-control" id="nametext" placeholder="Name">
					  </div>
					  <div class="form-group">
						<label for="inputUser">User Name</label>
						<input type="text" class="form-control" name="user_name"  id="inputUser" placeholder="User Name">
					  </div>
					  <div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
					  </div>
					  <div class="form-group">
						<label for="inputPassword">Password</label>
						<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
					  </div>
					</form>
					<button type="submit" class="btn btn-primary register">Register</button>
					</div>
					
				</div>
		  </div>
		</div>
	</div>
</div>
</body>
</html>
