<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
<thead>rescourses</thead>
	<?php 
		 require_once 'conn.php'; 
		$sql = 'SELECT r.resource_id, r.resource_otherDetails, r.resource_name, res.resourcetype_name
				FROM resource as r
				INNER JOIN resourcetype as res
				ON resourcetype_id = resourcetype_resourcetype_id;';
				$stmt->execute();
				$stmt->bind_result($rid, $rod, $rname, $rtype );
				while($stmt->fetch()) {
		
			echo '<tr><td colspan="2">'.$rid . ''.$resource.'</a></td></tr>';

			//echo '<td colspan="2"><a href="editresource.php?pid=' .$rid . '">'.$resource.'</a></td></tr>';
</table>
	 ?>
</body>
</html>