<?php 
	$pageTitle = "About";
    include 'includes/header.php'; 
?>

<body>

<?php include 'includes/menu.php'; ?>
<!-- This code includes the menu into the page. include take the specified filename and includes it 
on the page.
The include expression includes the file where the code(<?php// include 'includes/menu.php'; ?>) is placed in the code -->

<div class="wrapper">
<div id="content">
<h1>About</h1>


<table>
<thead>
	<tr>
		<th colspan="2">Title</th>
		<th colspan="2">Employee</th>
	</tr>
</thead>


		
<?php require_once 'conn.php'; ?>
	<?php
		$stmt = $link->prepare("SELECT resource.resource_id, resourcetype.resourcetype_name, resource.resource_name
			FROM resource
			INNER JOIN resourcetype
			ON resource.resourcetype_resourcetype_id=resourcetype.resourcetype_id;");
		$stmt->execute();
		$stmt->bind_result($rid, $rtype, $rname);
		while($stmt->fetch()) {
		echo '<tr class="alt" ><td colspan="2">' .$rtype . '</td><td td colspan="2">'.$rname.'</td></tr>';
		}
	?>
	

</table>

</div>	
<?php include 'includes/footer.php'; ?>

</div><!--wrapper-->

</body>
</html>