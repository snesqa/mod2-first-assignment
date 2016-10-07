<?php 
	$pageTitle = "Project";
    include 'includes/header.php'; 
?>
<body>

<?php include 'includes/menu.php'; ?>
<!-- This code includes the menu into the page. include take the specified filename and includes it 
on the page.
The include expression includes the file where the code(<?php// include 'includes/menu.php'; ?>) is placed in the code -->

<div class="wrapper">
<div id="content">
<h1>Projects</h1>

<table>
<thead>
	<tr>
		<th colspan="2">Project</th>
		<th colspan="2">Client</th>
		
	</tr>
</thead> 
	<?php require_once 'conn.php'; 

		$stmt = $link->prepare("SELECT customer_name, project_name, project_id
								FROM project_has_resource 
								JOIN project
								ON project.project_id = project_has_resource.project_project_id
								JOIN customer
								ON customer.customer_id = project.customer_customer_id");
		$stmt->execute();
		$stmt->bind_result($projectname, $customername, $pid );
		while($stmt->fetch()) {
		//echo $customername . ' : '.$projectname.' : '.$resourcename.'<br/>'.PHP_EOL;
		echo '<tr class="alt" ><td colspan="2">' .$customername . '</td> 
							   
		<td colspan="2"><a href="projectdetails.php?pid=' .$pid . '">'.$projectname.'</a></td></tr>';
		}



/*

		//Create new project
		$sql = "INSERT INTO projects (project_id, project_name, project_description, p_otherDetails, customer_customer_id) VALUES (null,'So ein ding', 'Web event','Anti web Survailance campagn','13')";
		$stmt = $link->prepare($sql);
		$stmt->bind_param('si', $n, $y);
		$stmt->execute();
		echo 'inserted '.$n.' as id:'.($stmt->insert_id);
*/

	?>

</table>
</div>	
<?php include 'includes/footer.php'; ?>

</div><!--wrapper-->

</body>
</html>