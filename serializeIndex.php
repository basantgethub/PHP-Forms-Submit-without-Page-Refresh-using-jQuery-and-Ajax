<!DOCTYPE html>

<html>

<head>

<title>PHP Forms Submit without Page Refresh using jQuery and Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function()
{	
	$(document).on('submit', '#registration_Form', function()
	{		
		var data = $(this).serialize();
		$.ajax({
		type : 'POST',
		url  : 'submit.php',
		data : data,
		success :  function(data)
				   {						
						$("#registration_Form").fadeOut(500).hide(function()
						{
							$(".result_1").fadeIn(500).show(function()
							{
								$(".result_1").html(data);
							});
						});
						
				   }
		});
		return false;
	});
});
</script>

<style type="text/css">
#container
{
	margin:50px auto;
	padding:15px;
	border:solid blue 1px;
	width:700px;
	background:azure;
}
label {
	font-family:cursive;
	font-size:20px;
	font-weight:bold;
	color:blue;
}
table
{
	margin:auto;
	width:80%;
	border-collapse:collapse;
	padding:10px;
	text-align:center;
	border:solid blue 1px;
}
td {
	padding:15px;
}
input
{
	height:35px;
	width:250px;
	text-align:center;
	border:solid blue 2px;
	font-family:Verdana, Geneva, sans-serif;
	border-radius:3px;
	font-size:18px;
	font-family:cursive;
}
button
{
	text-align:center;
	width:50%;
	height:35px;
	border:0;
	font-family:Verdana, Geneva, sans-serif;
	border-radius:3px;
	background:#00a2d1;
	color:#fff;
	font-weight:bolder;
	font-size:18px;
	cursor:pointer;
}
hr
{
	border:solid #cecece 1px;
}
#header
{
	width:100%;
	height:50px;
	background:#00a2d1;
	text-align:center;
}
#header label
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:35px;
	color:#f9f9f9;
}
a{
	color:#00a2d1;
	text-decoration:none;
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
					  <button type="submit" class="btn btn-primary register">Register</button>
					</form>
					
					</div>
					
				</div>
		  </div>
		</div>
	</div>
</div>

</body>

</html>
