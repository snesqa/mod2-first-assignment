<?php
require_once 'conn.php'; // establish db connection

$rname = filter_input(INPUT_POST, 'rname') or die('something went wrong while storing customer name');
$details = filter_input(INPUT_POST, 'details') or die('something went wrong while storing customer address');

$resourcetype = filter_input(INPUT_POST, 'resourcetype', FILTER_VALIDATE_INT) or die('something went wrong while storing zip');

$sql = 'INSERT INTO resource(resource_name, resource_otherDetails, resourcetype_resourcetype_id) 
		VALUES ( ? , ?, ?)';

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('ssi', $rname, $details, $resourcetype);
	$stmt->execute();

	echo 'inserted '.$rname.' as id:'.($stmt->insert_id); // id for inserted record
	//echo 'Your username is '.$email.' go to <a href="index.php">login</a>'
	//header("location: index.php?signup=true");
?>