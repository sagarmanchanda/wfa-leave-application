<!DOCTYPE html>
		<html>
		<head>
			<title>student Form</title>
		</head>
		<body><form method="POST" action="../Scripts/generationHandleRequest.php" ><label>startdate</label><input type="text" id="startdate_student" name="startdate_student" value="">
			<br><label>enddate</label><input type="text" id="enddate_student" name="enddate_student" value="">
			<br><label>for academic purpose</label><input type="radio" id="acadpurpose_student" name="acadpurpose_student" value="TRUE">
			<br><label>Others</label><input type="radio" id="otherpurpose_student" name="otherpurpose_student" value="TRUE">
			<br><label>reason</label><input type="text" id="reason" name="reason" value="">
			<br><label></label><input type="submit" id="submit" name="submit" value="submit">
			<br></form>
		</body>
		</html>