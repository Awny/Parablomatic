<!DOCTYPE html>
<html>
<body>
<h3>People Amount Estimator</h3>
	<form attribute = POST  method=POST>
	<table border=1>
		<tr>
			<td>Amount of People in this Booth</td>
			<td><input type = text name=people id=people></td>
		</tr>
		<tr>
			<td>Amount of Booths</td>
			<td><input type = text name=booths id=booths></td>
		</tr>
	</table>
	<input type= submit>
</form>
	<h4> Answer:</h6>
	<?php 
		$people = $_POST['people'];
		$booths = $_POST['booths'];
		$answer = $people * $booths;
		print "$answer";
	?>
</body>
</html>