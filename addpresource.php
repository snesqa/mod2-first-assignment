<?php 
require_once 'conn.php'; // establish db connection
/*echo $_POST['projectid'];
echo $_POST['resourceid'];
echo $_POST['startdate'];
echo $_POST['enddate'];
echo $_POST['hur'];
*/

$projectid = filter_input(INPUT_POST, 'projectid', FILTER_VALIDATE_INT) or die('projectid');
$resourceid = filter_input(INPUT_POST, 'resourceid', FILTER_VALIDATE_INT) or die('resourceid');
$startdate = filter_input(INPUT_POST, 'startdate') or die('startdate');
$enddate = filter_input(INPUT_POST, 'enddate') or die('enddate');
$hur = filter_input(INPUT_POST, 'hur', FILTER_VALIDATE_FLOAT) or die('hourlyUsageRate');

$sql = 'INSERT INTO project_has_resource(project_project_id, resource_resource_id, startDate, endDate, hourlyUsageRate)
values (? , ? , ? , ?, ?)';


$stmt = $link->prepare($sql); 
	$stmt->bind_param('iissd', $projectid, $resourceid, $startdate, $enddate, $hur);
	$stmt->execute();

	//echo 'inserted '.$name.' as id:'.($stmt->insert_id); // id for inserted record
	echo 'Succes!';
 ?>
