<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<form name="frmUser" method="post" action="../Auth/authenticate.php">

		<div class="row" style="margin-top: 100px;">
			<div class="col-md-4 col-md-offset-4">
				<h2 style="text-align: center;">Login Details</h2>
				<hr>
				<input type="text" name="userName" placeholder="Username" class="form-control"><br>
				<input type="password" name="password" placeholder="Password" class="form-control"><br>
				<input type="submit" name="submit" value="Submit" class="form-control btn btn-success">
			</div>
		</div>
	</form>
</body>
</html>