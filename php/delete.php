<?php
include('display.php');

if(isset($_POST['delete_btn']))
  {
  	mysqli_query($con,"DELETE from book_form where id='$_POST[id]';");
 }
?>
 