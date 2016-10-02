<?php 



$sql = "INSERT INTO projects (project_id, project_name, project_description, p_otherDetails, customer_customer_id) VALUES (null,'So ein ding', 'Web event','Anti web Survailance campagn','13')";
$stmt = $link->prepare($sql);
$stmt->bind_param('si', $n, $y);
$stmt->execute();
echo 'inserted '.$n.' as id:'.($stmt->insert_id);

 ?>