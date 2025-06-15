<?php
	include "security.php";
if (isset($_POST['submit'])) {

$name= $_POST['name1'];
$desp= $_POST['description'];

	$img_name = $_FILES['fileToUpload']['name'];
	$img_size = $_FILES['fileToUpload']['size'];
	$tmp_name = $_FILES['fileToUpload']['tmp_name'];
	$error = $_FILES['fileToUpload']['error'];
	$folder='images/'.$img_name;
	move_uploaded_file($tmp_name, $folder);
	$sql=" INSERT INTO package( image, name, description) VALUES ('$img_name','$name','$desp')";
	mysqli_query($connection, $sql);
	/*
    $sql = "INSERT INTO package ( image, name, description) 
				        VALUES('$img_name', '$name', '$desp')";
				mysqli_query($connection, $sql);
   */ 
}
/*
$sql = "SELECT * FROM image ORDER BY id DESC";
$res = mysqli_query($connection,  $sql);

if (mysqli_num_rows($res) > 0) {
	while ($images = mysqli_fetch_assoc($res)) {  ?>
   

	   <img src="images/<?=$images['images']?>">
   
		*/

?>