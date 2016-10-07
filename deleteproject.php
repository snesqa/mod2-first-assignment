<?php require_once 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create project</title>
	<meta charset="UTF-8">
	<meta name="author" content="Snezana Ilic" />
	<title>Create project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h2>Create new project</h2>
	<form action="deleteprojectlogic.php" method="post">
	<select name="pid">
		<option>Project name</option>

<?php

	$sql = "SELECT project_id, project_name FROM project";
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($pid, $project_name);
	while ($stmt->fetch()) {
		echo '	<option value="'.$pid.'">'.$project_name.'</option>'.PHP_EOL;
	}

	?>

</select><br>
	<input type="submit" value="Delete project">
</form>

</body>
</html>