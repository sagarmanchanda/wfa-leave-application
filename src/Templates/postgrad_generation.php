<!DOCTYPE html>
		<html>
		<head>
			<title>postgrad Form</title>
		</head>
		<body>
		<h2>Leave Form</h2>
		<form method="POST" action="../Scripts/generationHandleRequest.php" >
		<input type="text" id="startdate_postgrad" name="startdate_postgrad" value="" class="form-control" placeholder="Start Date">
			<br><input type="text" id="enddate_postgrad" name="enddate_postgrad" value="" class="form-control" placeholder="End Date">
			<br><label>For academic purpose&nbsp;</label><input type="radio" id="acadpurpose_postgrad" name="acadpurpose_postgrad" value="TRUE">
			<br><label>Others&nbsp;</label><input type="radio" id="otherpurpose_postgrad" name="otherpurpose_postgrad" value="TRUE">
			<br><input type="text" id="reason_postgrad" name="reason_postgrad" value="" class="form-control" placeholder="Reason">
			<br><label></label><input type="submit" id="submit" name="submit" value="Submit" class="form-control btn btn-primary">
			<br></form>
		</body>
		</html>