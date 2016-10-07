<?php
require_once 'conn.php'; // establish db connection

$name = filter_input(INPUT_POST, 'name') or die(' customer name');
$address = filter_input(INPUT_POST, 'address') or die('customer address');
$cname = filter_input(INPUT_POST, 'cname') or die(' name');
$phone = filter_input(INPUT_POST, 'phone') or die(' phone');
$zip = filter_input(INPUT_POST, 'zip', FILTER_VALIDATE_INT) or die('storing zip');

$sql = 'INSERT INTO customer ( customer_name, customer_adress, c_contactName, c_contactPhone, cityzip_cityzip_id) VALUES ( ? , ?, ?, ?, ? )';

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('ssssi', $name, $address, $cname, $phone, $zip);
	$stmt->execute();

	echo 'inserted '.$name.' as id:'.($stmt->insert_id); // id for inserted record
	//echo 'Your username is '.$email.' go to <a href="index.php">login</a>'
	//header("location: index.php?signup=true");
?>
