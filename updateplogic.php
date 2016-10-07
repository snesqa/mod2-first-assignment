<?php
require_once 'conn.php'; // establish db connection

$projectid = filter_input(INPUT_POST, 'projectid', FILTER_VALIDATE_INT) or die('pid');
$pname = filter_input(INPUT_POST, 'pname', FILTER_SANITIZE_STRING) or die('pname');
$pdesc = filter_input(INPUT_POST, 'pdesc', FILTER_SANITIZE_STRING) or die('pdesc');
$podetails = filter_input(INPUT_POST, 'podetails', FILTER_SANITIZE_STRING) or die('podetails');

$sql = "UPDATE project SET project_name=?, project_description=?, p_otherDetails=?
where project_id=?";

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('sssi', $pname, $pdesc, $podetails, $projectid);
	

	if($stmt->execute()){
		echo 'updated' ;
	}else{
		echo 'not working yet';
	}
	
	//echo 'inserted '.$pname.' as id:'.($stmt->insert_id); // id for inserted record
	//echo 'Your username is '.$email.' go to <a href="index.php">login</a>'
	//header("location: index.php?signup=true");
?>