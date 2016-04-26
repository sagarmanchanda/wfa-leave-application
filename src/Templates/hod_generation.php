<!DOCTYPE html>
		<html>
		<head>
			<title>hod Form</title>
		</head>
		<h2>Leave Form</h2>
		<body><form method="POST" action="../Scripts/generationHandleRequest.php" >
		<input type="text" id="startdate_hod" name="startdate_hod" value="" placeholder="Start Date" class="form-control">
			<br><input type="text" id="enddate_hod" name="enddate_hod" value="" placeholder="End Date" class="form-control">
			<br><label>For academic purpose&nbsp;</label><input type="radio" id="acadpurpose_hod" name="acadpurpose_hod" value="TRUE">
			<br><label>Others&nbsp;</label><input type="radio" id="otherpurpose_hod" name="otherpurpose_hod" value="TRUE">
			<br><input type="text" id="reason_hod" name="reason_hod" value="" class="form-control" placeholder="Reason">
			<br><label></label><input type="submit" id="submit" name="submit" value="Submit" class="form-control btn btn-primary">
			<br></form>
		</body>
		</html>