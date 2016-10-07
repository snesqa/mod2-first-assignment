<?php 
require_once 'conn.php';
$pid = filter_input(INPUT_POST, 'pid') or die(mysql_error());

$sql = "DELETE FROM project WHERE project.project_id = $pid";
$stmt = $link->prepare($sql);
$stmt->bind_param('i',$pid);
$stmt->execute();
	 
echo 'Project deleted , affected rows: '.$stmt->affected_rows ;

?>
