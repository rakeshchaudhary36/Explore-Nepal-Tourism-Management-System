<?php

@include 'config.php';

if(isset($_POST['add_package'])){

   $package_image = $_FILES['package_image']['name'];
   $package_name = $_POST['package_name'];
   $package_details = $_POST['package_details'];
   $package_image_tmp_name = $_FILES['package_image'];
   $package_image_folder = 'uploaded_img/'.$package_image;
   
   
   
   if(empty($package_image) || empty($package_name) || empty($package_details)){
      $message[] = 'please fill out all';
   }else{
      // $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $insert = "INSERT INTO `destination27`(`image`, `name`, `details`) VALUES ('$package_image','$package_name','$package_details')";
      // $insert = "INSERT INTO `package7`(`image`, `name`, `description`) VALUES ('$package_image','$package_name','$package_description')";

      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($package_image, $package_image_folder);
         $message[] = 'new destination added successfully';
      }else{
         $message[] = 'could not add the destination';
      }
   }

};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM destination21 WHERE id = $id");
   header('location:educational_dest.php');
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM destination22 WHERE id = $id");
   header('location:educational_dest.php');
};
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM destination23 WHERE id = $id");
  header('location:educational_dest.php');
};
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM destination24 WHERE id = $id");
  header('location:educational_dest.php');
};
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM destination25 WHERE id = $id");
  header('location:educational_dest.php');
};
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM destination26 WHERE id = $id");
  header('location:educational_dest.php');
};
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM destination27 WHERE id = $id");
  header('location:educational_dest.php');
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
         <h3>add a new destination</h3>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="package_image" class="box">
         <input type="text" placeholder="enter name" name="package_name" class="box">
         <input type="text" placeholder="enter details" name="package_details" class="box">
         <input type="submit" class="btn" name="add_package" value="add destination">
         <a href="adminpage.html" class="btn">go back!</a>
         <img src="images/<?php echo $row['image']; ?>" height="100" alt="">

      </form>

   </div>

   <?php
   $select = mysqli_query($conn, "SELECT * FROM destination21");
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th> -->
         </tr>
         </thead>
        
      </table>
   </div>
</div>


   <?php
   $select = mysqli_query($conn, "SELECT * FROM destination21");
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th> image</th>
            <th> name</th>
            <th> details</th>
            <th>action</th>
         </tr>
         </thead>
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['details']; ?></td>
            <td>
               <a href="educational_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="educational_dest.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>
</div>


   <?php
   
   $select = mysqli_query($conn, "SELECT * FROM destination22");

   
   ?>
   <div class="product-display">
      <table class="product-display-table">
          <thead>
         <tr>
            <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th> -->
         </tr>
         </thead> 
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['details']; ?></td>
            <td>
               <a href="educational_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>

               <a href="educational_dest.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<?php
   
   $select = mysqli_query($conn, "SELECT * FROM destination23");

   
   ?>
   <div class="product-display">
      <table class="product-display-table">
          <thead>
         <tr>
            <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th> -->
         </tr>
         </thead> 
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['details']; ?></td>
            <td>
               <a href="educational_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>

               <a href="educational_dest.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<?php
   
   $select = mysqli_query($conn, "SELECT * FROM destination24");

   
   ?>
   <div class="product-display">
      <table class="product-display-table">
          <thead>
         <tr>
            <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th> -->
         </tr>
         </thead> 
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['details']; ?></td>
            <td>
               <a href="educational_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>

               <a href="educational_dest.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<?php
   
   $select = mysqli_query($conn, "SELECT * FROM destination25");

   
   ?>
   <div class="product-display">
      <table class="product-display-table">
          <thead>
         <tr>
            <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th> -->
         </tr>
         </thead> 
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['details']; ?></td>
            <td>
               <a href="educational_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>

               <a href="educational_dest.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<?php
   
   $select = mysqli_query($conn, "SELECT * FROM destination26");

   
   ?>
   <div class="product-display">
      <table class="product-display-table">
          <thead>
         <tr>
            <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th> -->
         </tr>
         </thead> 
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['details']; ?></td>
            <td>
               <a href="educational_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>

               <a href="educational_dest.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


<?php
   
   $select = mysqli_query($conn, "SELECT * FROM destination27");

   
   ?>
   <div class="product-display">
      <table class="product-display-table">
          <thead>
         <tr>
            <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th> -->
         </tr>
         </thead> 
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['details']; ?></td>
            <td>
               <a href="educational_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>

               <a href="educational_dest.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


<?php
   
 


