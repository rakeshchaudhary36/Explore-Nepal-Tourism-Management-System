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

      $update_data = "UPDATE destination28 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination29 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination30 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination31 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination32 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination33 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      $update_data = "UPDATE destination34 SET image='$package_image', name='$package_name', details='$package_details'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);
      
      if($upload){
         move_uploaded_file($package_image, $package_image_folder);
         header('location:family_dest.php');
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
      $select = mysqli_query($conn, "SELECT * FROM destination28 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="family_dest.php" class="btn">go back!</a>
   </form>
   <?php }; ?>
   
   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination29 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="family_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>

   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination30 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="family_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination31 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="family_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination32 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="family_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination33 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="family_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>


   <?php
      $select = mysqli_query($conn, "SELECT * FROM destination34 WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?> 
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the destination</h3>
      <input type="file" class="box" name="package_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="package_name" value="<?php echo $row['name']; ?>" placeholder="enter the package name">
      <input type="text" min="0" class="box" name="package_details" value="<?php echo $row['details']; ?>" placeholder="enter the package description">
      <input type="submit" value="update destination" name="update_package" class="btn">
      <a href="religious_dest.php" class="btn">go back!</a>

   </form>
   <?php }; ?>
</div>

</div>

</body>
</html>