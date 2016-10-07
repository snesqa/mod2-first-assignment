<?php
require_once 'conn.php'; // establish db connection

$pname = filter_input(INPUT_POST, 'pname') or die('project name');
$pdesc = filter_input(INPUT_POST, 'pdesc') or die('description');
$podesc = filter_input(INPUT_POST, 'podesc') or die(' other details');
$customerid = filter_input(INPUT_POST, 'customerid', FILTER_VALIDATE_INT) or die(' customerid');

 $sql = "INSERT INTO project ( project_name, project_description, p_otherDetails, customer_customer_id) VALUES (?, ?, ?, ?)";

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('sssi', $pname, $pdesc, $podesc, $customerid);
	$stmt->execute();

	echo 'inserted project name '.$pname.' as id:'.($stmt->insert_id); // id for inserted record
	//echo 'Your username is '.$email.' go to <a href="index.php">login</a>'
	//header("location: index.php?signup=true");
?>

