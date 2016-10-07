<?php 
require_once 'conn.php';
$pid = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT) or die('pid');
$rid = filter_input(INPUT_GET, 'rid', FILTER_VALIDATE_INT) or die(mysql_error());
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete project</title>
</head>
<body>
	<?php 
			

$sql = "DELETE FROM project_has_resource
		WHERE project_has_resource.project_project_id = $pid 
		AND project_has_resource.resource_resource_id = $rid";
			$stmt = $link->prepare($sql);
			$stmt->execute();
			echo $stmt->affected_rows;
	 



	 ?>
</body>
</html>