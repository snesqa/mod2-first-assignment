<?php 
require_once 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update project</title>
</head>
<body>
	<form action="updateplogic.php" method="post">
	<select name="projectid" onchange="window.location='updateproject.php?project_id='+this.value"><!-- +this.value / + is concatinate, this is element(select), value of that element-  -->
	<option value="">Project name</option>
<?php
	$sql = 'SELECT project_id, project_name FROM project';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($pid, $pname);
		while ($stmt->fetch()) {
			$s = ($pid==(int)$_GET['project_id'])?'selected=selected"':'';//select selected pname, it selects the current value in dropdown to be shown and not the default value 
			echo '<option value="'.$pid.'" '.$s.'>'.$pname.'</option>';
		}

	?></select><br>
	<?php 
		if(isset($_GET['project_id'])){
			$ProjectID = (int)$_GET['project_id'];
			$Project = $link->prepare("SELECT project_name, project_description, p_otherDetails 
										FROM project WHERE project_id = ?");
			if($Project===false)//check if statement is true
				echo 'Problem with statement';
			$Project->bind_param('i',$ProjectID);
			$Project->execute();
			$Project->bind_result($ProjectName,$ProjectDescription,$ProjectOtherDescription);
			$results = $Project->fetch();
		}

	?>
	Project name : <br><input type="text" name="pname" value="<?php echo $ProjectName;?>"><br>
	Description : <br><textarea type="text" name="pdesc"><?php echo $ProjectDescription;?></textarea><br>
	Other desc : <br><textarea type="text" name="podetails"><?php echo $ProjectOtherDescription;?></textarea><br>
	<br><input type="submit" value="Instant Update">
	
	</form>
</body>
</html>