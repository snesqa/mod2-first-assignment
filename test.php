<?php 



$sql = "INSERT INTO projects (project_id, project_name, project_description, p_otherDetails, customer_customer_id) VALUES (null,'So ein ding', 'Web event','Anti web Survailance campagn','13')";
$stmt = $link->prepare($sql);
$stmt->bind_param('si', $n, $y);
$stmt->execute();
echo 'inserted '.$n.' as id:'.($stmt->insert_id);

 ?>


 

<h2>Categories</h2>
<?php
$sql = 'SELECT c.category_id, c.name
FROM film_category fc, category c
WHERE fc.film_id=?
AND fc.category_id = c.category_id';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $fid);
$stmt->execute();

$stmt->bind_result($cid, $cname);
while($stmt->fetch()) {
	echo '<li><a href="filmlist.php?cid='.$cid.'">'.$cname.'</a></li>'.PHP_EOL;
}

?>

<form action="filmaddcategory.php" method="post">
<input type="hidden" name="fid" value="<?=$fid?>">
<select name="cid">

<?php
$sql = 'SELECT category_id, name FROM category';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($cid, $cnam);
while ($stmt->fetch()) {
	echo '	<option value="'.$cid.'">'.$cnam.'</option>'.PHP_EOL;
}
?>

</select>
<input type="submit" name="action" value="Add to category">
</form>



<h2>Actors</h2>
<?php
$sql = 'SELECT a.actor_id, a.first_name, a.last_name
FROM film_actor fa, actor a
WHERE fa.film_id=?
AND fa.actor_id=a.actor_id';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $fid);
$stmt->execute();

$stmt->bind_result($aid, $afname, $alname);
while($stmt->fetch()) {
	echo '<li><a href="actordetails.php?aid='.$aid.'">'.$afname.' '.$alname.'</a></li>'.PHP_EOL;
}
?>


<a href="editfilmform.php?fid=<?=$fid?>">Edit film</a>



</body>
</html>
	<?php  
	$sql = 'SELECT * FROM projects';
	$stmt = 
?>







<select name="zipcode" value="8220">
                <?php
                    $sql = 'SELECT zipcode, city FROM zipcode';
                    $stmt = $link->prepare($sql);
                    $stmt->execute();
                    $stmt->bind_result($zipcode, $cityname);
                    
                    while ($stmt->fetch()){
                        echo '<option value="'.$zipcode.'">'.$zipcode.'</option>';
                    }
                
$clientname = filter_input(INPUT_POST, 'client_name') or die('missing parameter');
    $address = filter_input(INPUT_POST, 'address') or die('missing parameter');
    $contactname = filter_input(INPUT_POST, 'contact_name') or die('missing parameter');
    $contactphone = $_POST['contact_phone'];
    $zip = $_POST['zipcode'];
    

    $sql = 'INSERT INTO client (client_name, client_adress, client_contact_name, client_contact_phone, zipcode_zipcode)
            VALUES (?, ?, ?, ?, ?)';

    $stmt = $link->prepare($sql);
    $stmt->bind_param('ssssi', $clientname, $address, $contactname, $contactphone, $zip);
    $stmt->execute();
    echo 'Hej hej';
    ?>