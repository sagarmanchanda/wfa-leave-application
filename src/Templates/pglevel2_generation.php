<!DOCTYPE html>
		<html>
		<head>
			<title>pglevel2 Form</title>
		</head>
		<body>
		<h2>Leave Form</h2>
		<form method="POST" action="../Scripts/generationHandleRequest.php" >
		<input type="text" id="startdate_pglevel2" name="startdate_pglevel2" value="" class="form-control" placeholder="Start Date">
			<br><input type="text" id="enddate_pglevel2" name="enddate_pglevel2" value="" class="form-control" placeholder="End Date">
			<br><label>For academic purpose&nbsp;</label><input type="radio" id="acadpurpose_pglevel2" name="acadpurpose_pglevel2" value="TRUE">
			<br><label>Others&nbsp;</label><input type="radio" id="otherpurpose_pglevel2" name="otherpurpose_pglevel2" value="TRUE">
			<br><input type="text" id="reason_pglevel2" name="reason_pglevel2" value="" class="form-control" placeholder="Reason">
			<br><label></label><input type="submit" id="submit" name="submit" value="Submit" class="form-control btn btn-primary">
			<br></form>
		</body>
		</html>