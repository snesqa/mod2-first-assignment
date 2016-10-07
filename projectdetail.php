<?php 
	$pid = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT) or die('fail');
	require_once 'conn.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project details</title>
</head>
<body>
	<!--    -->
	<?php
$pid = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT) or die('missing parameter');

require_once 'dbcon.php';
$sql = 'SELECT p.project_id, p.project_name, p.project_description, p.p_otherDetails, p.customer_customer_id, c.customer.name
		FROM project p, customer c
		WHERE p.customer_customer_id=?
		AND c.customer_id = p.customer_customer_id';

$stmt = $link->prepare($sql);
$stmt->bind_param('i', $pid);
$stmt->execute();

$stmt->bind_result($pname, $pdesc, $podetails, $cname);
while($stmt->fetch()){
	echo '<h1>'.$pname.' '.$pdesc.'</h1>'.PHP_EOL;
	echo '<p>'.$podetails.'</p>';
	echo '<p>'.$cname.'</p>';

	$stmt->bind_result($pid, $pname, $pdesc, $podetails, $canem);
while($stmt->fetch()) {
	echo '<li><a href=".php?aid='.$aid.'">'.$afname.' '.$alname.'</a></li>'.PHP_EOL;
}
?>


<a href="editfilmform.php?fid=<?=$fid?>">Edit film</a>

}
?>

</body>
</html>