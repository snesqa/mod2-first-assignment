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
	<?php require_once 'conn.php';?>
	<h2>Create new project</h2>
	<form action="createprojectlogic.php" method="post">
	<select name="customerid">
		<option>Choose customer</option>
<?php
	$sql = 'SELECT customer_id, customer_name FROM customer';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($cid, $customer_name);
	while ($stmt->fetch()) {
		echo '<option name="customerid" value="'.$cid.'">'.$customer_name.'</option>'.PHP_EOL;
	}
?>
</select><br>
	project name:<br> 
	<input type="text" name="pname"><br>
	description:<br> 
	<textarea type="text" name="pdesc" rows="5" cols="40"></textarea><br>
	other description:<br> 
	<textarea type="text" name="podesc" rows="5" cols="40"></textarea><br>
		<br><input type="submit" value="Register new project">
</form>

</body>
</html>