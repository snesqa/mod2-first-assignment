<?php 
require_once 'conn.php';
//$proid = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT) or die('pid');
$pid = (int)$_GET['pid'];
 ?>

	<?php 
$sql = 'SELECT project_name, project_description, p_otherDetails 
		FROM project 
		WHERE project_id = ?';
			$stmt = $link->prepare($sql);
			$stmt->bind_param('i', $pid);
			$stmt->execute();
			$stmt->bind_result( $projectname , $project_description , $p_otherDetails);
		if($stmt->fetch()) {
		echo $projectname . ' : '.$project_description.' : '.$p_otherDetails.'<br/>';
		
			  
			}
	 ?>
