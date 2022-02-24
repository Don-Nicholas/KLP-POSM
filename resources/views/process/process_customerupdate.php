<?php 
include('connection.php');

if(isset($_POST['update'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
	
	$mysqli->query("UPDATE customer SET cus_name='$name', cus_add='$address', contact='$contact' where cus_id=$id")
		or die($mysqli->error);	

header("location: index.php");
}
?>
