<?php 
include('connection.php');

if(isset($_POST['save'])) {

$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];

 $mysqli->query("INSERT INTO customer (cus_name, cus_add, contact) 
	VALUES('$name', '$address', '$contact')")
		or die($mysqli->error); 
header("location: index.php");
}
?>
