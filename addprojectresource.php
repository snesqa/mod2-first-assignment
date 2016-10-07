<?php require_once 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add project resource</title>
</head>
<body>
	<!--Insert project dropdown , resource dropdwon, start date enddate, hur -->
<form action="addpresource.php" method="post">
<!--  Projecets  -->
	<select name="projectid">
		<option>Choose project</option>
<?php
	$sql = 'SELECT project_id, project_name FROM project';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($proid, $pro_name);
	while ($stmt->fetch()) {
		echo '	<option name="projectid" value="'.$proid.'">'.$pro_name.'</option>'.PHP_EOL;
	}

?>
</select>
<br>
<!--  Resources  -->
	<select name="resourceid">
		<option>Choose resource</option>
<?php
	$sql = 'SELECT resource_id, resource_name FROM resource';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($rid, $res_name);
	while ($stmt->fetch()) {
		echo '	<option name="resourceid" value="'.$rid.'">'.$res_name.'</option>'.PHP_EOL;
	}

	?>

</select><br>
2016-10-09 00:00:00<br><input type="text" name="startdate"><br>
2016-12-18 00:00:00<br><input type="text" name="enddate"><br>
Hourly usage rate<br><input type="text" name="hur"><br>
<input type="submit" value="Add resource to project">
</form>
</body>
</html>