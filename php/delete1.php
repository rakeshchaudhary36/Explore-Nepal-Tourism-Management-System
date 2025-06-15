<?php


include ("security.php");
if(isset($_POST['delete']))
{
    $id=$_POST['cancel_id'];
    $del="delete from book_form where id='$id'";


$data=mysqli_query($connection,$del);
if($data)
{
    echo "Record Deleted";
    header("location:display.php");
}
else{
    echo "Not Deleted";
}
}
?>