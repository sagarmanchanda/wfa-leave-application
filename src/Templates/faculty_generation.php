<!DOCTYPE html>
		<html>
		<head>
			<title>faculty Form</title>
		</head>
		<body><form method="POST" action="../Scripts/generationHandleRequest.php" >
		<h2>Leave Form</h2>
		<input type="text" id="startdate_faculty" name="startdate_faculty" value="" placeholder="Start Date" class="form-control">
			<br><input type="text" id="enddate_faculty" name="enddate_faculty" value="" placeholder="End Date" class="form-control">
			<br><label>For academic purpose&nbsp;</label><input type="radio" id="acadpurpose_faculty" name="acadpurpose_faculty" value="TRUE">
			<br><label>Others&nbsp;</label><input type="radio" id="otherpurpose_faculty" name="otherpurpose_faculty" value="TRUE">
			<br><input type="text" id="reason_faculty" name="reason_faculty" value="" placeholder="Reason" class="form-control">
			<br><label></label><input type="submit" id="submit" name="submit" value="Submit" class="form-control btn btn-primary">
			<br></form>
		</body>
		</html>