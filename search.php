<?php

$user = 'root';
$password = 'root';
$db = 'startercar';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
) or die("could not conect");

if(isset($_POST['input'])){
	$sql = "SELECT Make, Model FROM cars WHERE Make LIKE %'".$_POST['input']."' OR Model LIKE %'".$_POST['input']."'";
	$query = mysqli_query($link, $sql);
	while($row=mysqli_fetch_assoc($query)){
		?><p><?php echo $row["Make"]; ?></p>
		<p><?php echo $row["Model"]; ?></p><?php
	}
	

}


	
?>