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
		<th colspan="2">Project resource</th>
		<th colspan="2">Resource type</th>
		<th colspan="2">Delete</th>
	</tr>
</thead> 
	<?php require_once 'conn.php'; 

		$stmt = $link->prepare("SELECT customer.customer_name, 
									customer.customer_id, 
									project.project_name, 
									project.project_id, 
									project_has_resource.project_project_id, 
									project_has_resource.resource_resource_id,
									resource.resource_id ,
									resource.resource_name ,
									resourcetype.resourcetype_id, 
									resourcetype.resourcetype_name
								FROM project_has_resource 
								JOIN project
								ON project.project_id = project_has_resource.project_project_id
								JOIN customer
								ON customer.customer_id = project.customer_customer_id
								join resource
								on resource.resource_id = project_has_resource.resource_resource_id
								Join resourcetype 
								on resourcetype.resourcetype_id = resource.resourcetype_resourcetype_id");
		$stmt->execute();
		$stmt->bind_result($customername, $cid, $projectname, $pid , 
			$phrppid, $phrrrid, $rid, $resourcename, $rtid, $rtname);
		while($stmt->fetch()) {
		//echo $customername . ' : '.$projectname.' : '.$resourcename.'<br/>'.PHP_EOL;
		echo '<tr><td colspan="2">' .$projectname . '</td>							   
		<td colspan="2"><a href="projectdetails.php?pid=' .$pid . '">'.$customername.'</a></td>
		<td colspan="2">'.$resourcename.'</td>
		<td colspan="2">'.$rtname.'</td>
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