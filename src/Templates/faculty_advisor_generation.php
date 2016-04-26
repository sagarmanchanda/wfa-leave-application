<!DOCTYPE html>
		<html>
		<head>
			<title>faculty_advisor Form</title>
		</head>
		<body><form method="POST" action="../Scripts/generationHandleRequest.php" >
		<h2>Leave Form</h2>
		<input type="text" id="startdate_faculty_advisor" name="startdate_faculty_advisor" value="" class="form-control" placeholder="Start Date">
			<br><input type="text" id="enddate_faculty_advisor" name="enddate_faculty_advisor" value="" class="form-control" placeholder="End Date">
			<br><label>For academic purpose&nbsp;</label><input type="radio" id="acadpurpose_faculty_advisor" name="acadpurpose_faculty_advisor" value="TRUE">
			<br><label>Others&nbsp;</label><input type="radio" id="otherpurpose_faculty_advisor" name="otherpurpose_faculty_advisor" value="TRUE">
			<br><input type="text" id="reason_faculty_advisor" name="reason_faculty_advisor" value="" placeholder="Reason" class="form-control">
			<br><label></label><input type="submit" id="submit" name="submit" value="Submit" class="form-control btn btn-primary">
			<br></form>
		</body>
		</html>