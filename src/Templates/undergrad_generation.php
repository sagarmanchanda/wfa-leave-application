<!DOCTYPE html>
		<html>
		<head>
			<title>undergrad Form</title>
		</head>
		<body>
		<h2>Leave Form</h2>
		<form method="POST" action="../Scripts/generationHandleRequest.php" >
			<input type="text" id="startdate_undergrad" class="form-control" placeholder="Start Date" name="startdate_undergrad" value="">
			<br><input type="text" id="enddate_undergrad" name="enddate_undergrad" value="" class="form-control" placeholder="End Date">
			<br><label>For academic purpose &nbsp; </label><input type="radio" id="acadpurpose_undergrad" name="acadpurpose_undergrad" value="TRUE">
			<br><label>Others <input type="radio" id="otherpurpose_undergrad" name="otherpurpose_undergrad" value="TRUE"></label>
			<br><input type="text" id="reason_undergrad" name="reason_undergrad" value="" class="form-control" placeholder="Reason">
			<br><label></label><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary form-control">
			<br></form><br><br>
		</body>
		</html>