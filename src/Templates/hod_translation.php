<?php
if ($requesteeState == "faculty" || $requesteeState == "faculty_advisor" || $requesteeState == "pglevel2") {
	echo "<td><label>Forward to DOFA for permission </label><input type=\"radio\" id=\"forwardtodofa_fac\" name=\"forwardtodofa_fac\" value=\"TRUE\"></td>";
}
else {
	echo "<td><label>Accept request </label><input type=\"radio\" id=\"accept_student\" name=\"accept_student\" value=\"TRUE\"></td>";
}

?>

<td><label>Reject request&nbsp;</label><input type="radio" id="reject_all" name="reject_all" value="TRUE"></td>
<td><label></label><input type="submit" id="submit" name="submit" value="Submit" class="btn"></td>
</form>
