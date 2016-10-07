<?php 
require_once 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update project</title>
</head>
<body>
	<form action="ziplogic.php">
	<select name="zipid"><br>
<?php
	$sql = 'SELECT cityzip_id, cityzip_name FROM cityzip';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($zipid, $zipname);
		while ($stmt->fetch()) {
			echo '	<option value="'.$zipid.'">'.$zipid.'</option>'.PHP_EOL;
		}
	?></select><br>
	<br><input type="text" name="zip"><br>
	<br><input type="text" name="cityname"><br>
	<br><input type="submit" value="Update zip">
	
	</form>
</body>
</html>