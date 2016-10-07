<?php require_once 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head><!--  this page holds the register form and upon submitting redirects to registerlogic.php -->
	<meta charset="UTF-8">
	<meta name="author" content="Snezana Ilic" />
	<title>Create resource</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="contact-wrapper">

<form action="resourcelogic.php" method="post">
Resource name*
<input type="text" name="rname">

Other details*
<input type="text" name="details">


<select name="resourcetype">
	<option value="">Zip code</option>
	
	<?php
		$sql = 'SELECT resourcetype_id, resourcetype_name FROM resourcetype';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($rid, $rtype);
		while ($stmt->fetch()) {
			echo '	<option value="'.$rid.'">'.$rtype.'</option>'.PHP_EOL;
		}
	?>
			
	</select>
<input type="submit" value="Add new resource">
</form>


</div>
</body>
</html>
