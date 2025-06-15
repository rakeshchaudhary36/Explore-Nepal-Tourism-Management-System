<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_package'])){

   $package_image = $_FILES['package_image']['name'];
   $package_name = $_POST['package_name'];
   $package_details = $_POST['package_details'];
   $package_image_tmp_name = $_FILES['package_image']['tmp_name'];
   $package_image_folder = 'uploaded_img/'.$package_image;

   if(empty($package_image) || empty($package_name) || empty($package_details)){

      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE destination14 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination15 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination16 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination17 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination18 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination19 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination20 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);
      
      if($upload){
         move_uploaded_file($package_image, $package_image_folder);
         header('location:trekking_dest.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style3.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination14 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="trekking_dest.php" class="btn">go back!</a>
   </form>
   <?php }; ?>
   
   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination15 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="trekking_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>

   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination16 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="trekking_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination17 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="trekking_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination18 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="trekking_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination19 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="trekking_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination20 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="trekking_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>
</div>

</div>

</body>
</html>