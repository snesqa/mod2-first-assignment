<?php 
	$pageTitle = "Project has resource";
    include 'includes/header.php'; 
?>
<body>

<?php include 'includes/menu.php'; ?>

<div class="wrapper">
<div id="content">
<h1>Projects</h1>

<table>
<thead>
	<tr>
		<th colspan="2">Client</th>
		<th colspan="2">Project name</th>
		<th colspan="2">Delete</th>
	</tr>
</thead> 
	<?php require_once 'conn.php'; 

		$stmt = $link->prepare("SELECT 
									project.project_name, 
									project.project_id, 
									project_has_resource.project_project_id, 
									project_has_resource.resource_resource_id,
									
								FROM project_has_resource 
								JOIN project
								ON project.project_id = project_has_resource.project_project_id
								JOIN customer
								ON customer.customer_id = project.customer_customer_id
								");
		$stmt->execute();
		$stmt->bind_result($customername, $cid, $projectname, $pid, $phrppid, $phrrrid);
		while($stmt->fetch()) {
		//echo $customername . ' : '.$projectname.' : '.$resourcename.'<br/>'.PHP_EOL;
		echo '<tr><td colspan="2">' .$projectname . '</td>							   
		<td colspan="2"><a href="projectdetails.php?pid=' .$pid. '">'.$customername.'</a></td>
		<td colspan="2"><a href="deleteresourceonproject.php?pid=' .$pid . '&rid='.$rid .'">Delete</a></td>
		</tr>';
		}

	?>

</table>
</div>	
<?php include 'includes/footer.php'; ?>

</div><!--wrapper-->

</body>
</html>