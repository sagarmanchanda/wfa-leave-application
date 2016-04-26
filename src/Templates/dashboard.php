<?php 
	if ( session_id() == "" ){
		session_start();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-6" style="text-align: left;">
		<h1><b style="color:gray;"><?php echo $_SESSION['user_name']; ?></b>(<?php echo $_SESSION['stateName']; ?>)</h1>
	</div>
	<div class="col-md-6" style="text-align: right;">
		<a href="../Auth/logout.php" class="btn btn-danger" style="margin-top: 20px;">Logout</a>
	</div>
	</div>
	
	<hr>
<div class="row">
<div class="col-md-5">
<!-- Generation Form if exists-->
<?php
	$stateName = $_SESSION['stateName'];
	$config = include('../Scripts/config.php');
	$databaseHostname = $config['databaseHostname'];
	$databaseUsername = $config['databaseUsername'];
	$databasePassword = $config['databasePassword'];
	$databaseName = "requestDB";
	$conn = new mysqli($databaseHostname, $databaseUsername, $databasePassword, $databaseName);
	if ($conn->connect_error) {
		die("Connection Error:".$conn->connect_error);
	}

	$sql = "SELECT * FROM AutomataStates WHERE stateName=\"".$stateName."\" AND stateType=\"generation\"";
	$result = $conn->query($sql);
	if($result->num_rows == 1) {
		$templateName = $stateName."_generation.php";
		include($templateName);
	}
	$conn->close();
?>
</div>
<div class="col-md-7">
<table class="table table-hover">
<thead>
<tr><th><h2>Your requests:</h2></th></tr>
</thead>
<tbody>
<!-- Generation Request Panel if exists-->
<?php
	$stateName = $_SESSION['stateName'];
	$username = $_SESSION['user_name'];
	$usernameColumn = $_SESSION['db_user_column'];
	$config = include('../Scripts/config.php');
	$databaseHostname = $config['databaseHostname'];
	$databaseUsername = $config['databaseUsername'];
	$databasePassword = $config['databasePassword'];
	$databaseName = "requestDB";
	$loginDatabaseHostname = $config['loginDatabaseHostname'];
	$loginDatabaseUsername = $config['loginDatabaseUsername'];
	$loginDatabasePassword = $config['loginDatabasePassword'];
	$loginDatabaseName = $config['loginDatabaseName'];
	$loginTableName = $config['loginTableName'];
	
	$conn = new mysqli($databaseHostname, $databaseUsername, $databasePassword, $databaseName);
	if ($conn->connect_error) {
		die("Connection Error:".$conn->connect_error);
	}
	
	$loginconn = new \mysqli($loginDatabaseHostname, $loginDatabaseUsername, $loginDatabasePassword, $loginDatabaseName);
	if ($loginconn->connect_error) {
		die("Connection Error:".$loginconn->connect_error);
	}

	$sql = "SELECT * FROM AutomataStates WHERE stateName=\"".$stateName."\" AND stateType=\"generation\"";
	$result = $conn->query($sql);
	if($result->num_rows == 1) {

		$sql = "SELECT * FROM ".$stateName."_generation WHERE inputType=\"DATABASE\"";
		$result = $conn->query($sql);
		$columns = [];
		if($result->num_rows > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				array_push($columns, array('columnNameinLogin' => $row['label'], 'columnNameinMainRequest' => $row['name']) );
			}
		}
		
		$sql = "SELECT * FROM ".$loginTableName." WHERE ".$usernameColumn."=\"".$username."\"";
		$result = $loginconn->query($sql);
		$columnValues = [];
		if($result->num_rows > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				foreach ($columns as $column) {
					array_push($columnValues, $row[$column['columnNameinLogin']]);
				}
			}
		}
		
		$sql = "SELECT * FROM RequestHandlingMain WHERE ";
		for ($index=0; $index < count($columns)-1; $index++) { 
			$sql .= $columns[$index]['columnNameinMainRequest']."=\"".$columnValues[$index]."\" AND ";
		}
		$sql .= $columns[$index]['columnNameinMainRequest']."=\"".$columnValues[$index]."\"";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = mysqli_fetch_assoc($result)) {
				$requestID = $row['requestID'];
				$requestDate = $row['date'];
				$presentState = $row['presentState'];
				$trClass = "";
				if ($presentState == "COMPLETED") {
					$presentState = "<b style=\"color:green;\">completed <span class=\"glyphicon glyphicon-ok\"></span></b>";
				} elseif ($presentState == "REJECTED") {
					$presentState = "<b style=\"color:red;\">rejected <span class=\"glyphicon glyphicon-remove\"></span></b>";
				} else {
					$presentState = "with the <b>".$presentState."</b>";
				}
				echo "<tr><td>Your request dated ".$requestDate." is currently ".$presentState."</td></tr>";
				# echo "<input type=\"hidden\" name=\"requestID\" value=\"".$requestID."\">";
			}
		}
	}

	$conn->close();
	$loginconn->close();
?>
</tbody>
</table>
</div>
</div>


<!-- Translation Request Panel if exists-->
<div class="row">
<!-- <table class="table table-hover">
<thead>
<tr><th><h2>Please verify the following requests:</h2></th></tr>
</thead>
<tbody> -->
<?php
	$stateName = $_SESSION['stateName'];
	$config = include('../Scripts/config.php');
	$databaseHostname = $config['databaseHostname'];
	$databaseUsername = $config['databaseUsername'];
	$databasePassword = $config['databasePassword'];
	$databaseName = "requestDB";

	$conn = new mysqli($databaseHostname, $databaseUsername, $databasePassword, $databaseName);
	if ($conn->connect_error) {
		die("Connection Error:".$conn->connect_error);
	}
	
	$sql = "SELECT * FROM RequestHandlingMain WHERE presentState=\"".$stateName."\"";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		echo "<table class=\"table table-hover\"><thead><tr><th><h2>Please verify the following requests:</h2></th></tr></thead><tbody>";
		while($row = mysqli_fetch_assoc($result)) {
			$requestID = $row['requestID'];
			$requesteeState = $row['ownerState'];
			$start_date = $row['startdate_'.$requesteeState];
			$end_date = $row['enddate_'.$requesteeState];
			$reason = $row['reason_'.$requesteeState];
			$requestee = $row['owner_'.$requesteeState];
			echo "<tr><td> Requestee: ".$requestee."(".$requesteeState.")<br>Dates: ".$start_date."-".$end_date."<br> Reason for leave: ".$reason."<br>Request ID: ".$requestID."</td>";
			echo "<form method=\"POST\" id=\"".$requestID."\" action=\"../Scripts/translationHandleRequest.php\">";
			include $stateName.'_translation.php';
			echo "<input type=\"hidden\" name=\"requestID\" value=\"".$requestID."\" form=\"".$requestID."\" >";
			echo "";
		}
		echo "";
	}
	$conn->close();

?>
</tbody>
</table>
</div>
</div>

</body>
</html>
