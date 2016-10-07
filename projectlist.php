<?php 
	$pageTitle = "Project";
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
		<th colspan="2">Project</th>
	</tr>
</thead> 
	<?php require_once 'conn.php'; 
		$stmt = $link->prepare("SELECT distinct project_name, project_id
								FROM project_has_resource 
								JOIN project
								ON project.project_id = project_has_resource.project_project_id");
		$stmt->execute();
		$stmt->bind_result($projectname, $pid );
		while($stmt->fetch()) {
		
		echo '			   
		<td colspan="2"><a href="projectdetails.php?pid=' .$pid . '">'.$projectname.'</a></td></tr>';
		}
	?>
</table>
</div>	
<?php include 'includes/footer.php'; ?>

</div><!--wrapper-->

</body>
</html>