<?php 
	require_once 'conn.php';
	error_reporting(E_ALL);
ini_set('display_errors', 1);
	$custoid = filter_input(INPUT_POST, 'custoid', FILTER_VALIDATE_INT) or die('customerid');
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) or die('name');
	$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING) or die(' adress');
	$cname = filter_input(INPUT_POST, 'cname', FILTER_SANITIZE_STRING) or die('cname');
	$phone = filter_input(INPUT_POST,  'phone', FILTER_SANITIZE_STRING) or die(' phone');
	$zip = filter_input(INPUT_POST,  'zip', FILTER_VALIDATE_INT) or die(' zip');

	//echo $custoid;
	//echo $zip;

 	$sql = "UPDATE customer SET customer_name=?, customer_adress=?, 
 	c_contactName=?, c_contactPhone=?, cityzip_cityzip_id=? WHERE customer_id= ?";

		$stmt = $link->prepare($sql);
		$stmt->bind_param('sssssi', $name, $address, $cname, $phone, $zip, $custoid);
		$stmt->execute();
		if ($stmt->errno) {
		echo "Oops! That's not right " . $stmt->error();
		}
		else {
		echo 'Updated '.$stmt->affected_rows.' rows';
		}

 ?>