<!DOCTYPE html>
		<html>
		<head>
			<title>faculty Form</title>
		</head>
		<body><form method="POST" action="../Scripts/generationHandleRequest.php" ><label>startdate</label><input type="text" id="startdate_faculty" name="startdate_faculty" value="">
			<br><label>enddate</label><input type="text" id="enddate_faculty" name="enddate_faculty" value="">
			<br><label>for academic purpose</label><input type="radio" id="acadpurpose_faculty" name="acadpurpose_faculty" value="TRUE">
			<br><label>Others</label><input type="radio" id="otherpurpose_faculty" name="otherpurpose_faculty" value="TRUE">
			<br><label>reason</label><input type="text" id="reason_faculty" name="reason_faculty" value="">
			<br><label></label><input type="submit" id="submit" name="submit" value="submit">
			<br></form>
		</body>
		</html>