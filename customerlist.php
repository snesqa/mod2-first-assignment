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

		$stmt = $link->prepare("SELECT cutomer_name, customer_id
								FROM customer");
		$stmt->execute();
		$stmt->bind_result($projectname, $pid );
		while($stmt->fetch()) {
		//echo $customername . ' : '.$projectname.' : '.$resourcename.'<br/>'.PHP_EOL;
		echo '			   
		<td colspan="2">' .$pid . '">'.$projectname.'</td></tr>';
		}



	?>

</table>
</div>	
<?php include 'includes/footer.php'; ?>

</div><!--wrapper-->

</body>
</html>