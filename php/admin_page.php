<?php

@include 'config.php';

if(isset($_POST['add_package'])){

   $package_image = $_FILES['package_image']['name'];
   $package_name = $_POST['package_name'];
   $package_description = $_POST['package_description'];
   $package_image_tmp_name = $_FILES['package_image'];
   $package_image_folder = 'images/'.$package_image;
   
   
   
   if(empty($package_image) || empty($package_name) || empty($package_description)){
      $message[] = 'please fill out all';
   }else{
      // $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $insert = "INSERT INTO `package6`(`image`, `name`, `description`) VALUES ('$package_image','$package_name','$package_description')";
      // $insert = "INSERT INTO `package7`(`image`, `name`, `description`) VALUES ('$package_image','$package_name','$package_description')";

      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($package_image, $package_image_folder);
         $message[] = 'new package added successfully';
      }else{
         $message[] = 'could not add the package';
      }
   }

};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM package WHERE id = $id");
   header('location:admin_page.php');
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM package1 WHERE id = $id");
   header('location:admin_page.php');
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM package2 WHERE id = $id");
   header('location:admin_page.php');
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM package3 WHERE id = $id");
   header('location:admin_page.php');
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM package4 WHERE id = $id");
   header('location:admin_page.php');
};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM package5 WHERE id = $id");
   header('location:admin_page.php');
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM package6 WHERE id = $id");
   header('location:admin_page.php');
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
         <h3>add a new package</h3>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="package_image" class="box">
         <input type="text" placeholder="enter package name" name="package_name" class="box">
         <input type="text" placeholder="enter package description" name="package_description" class="box">
         <input type="submit" class="btn" name="add_package" value="add package">
         <a href="adminpage.html" class="btn">go back!</a>
         <img src="images/<?php echo $row['image']; ?>" height="100" alt="">

      </form>

   </div>

   <?php
   $select = mysqli_query($conn, "SELECT * FROM package");
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
   $select = mysqli_query($conn, "SELECT * FROM package");
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>package image</th>
            <th>package name</th>
            <th>package description</th>
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
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>
</div>


   <?php
   
   $select = mysqli_query($conn, "SELECT * FROM package1");

   
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
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<?php
   
   $select = mysqli_query($conn, "SELECT * FROM package2");


   
   ?>
   <div class="product-display">
      <table class="product-display-table">
          <thead>
         <tr>
           <!-- <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th>-->
         </tr>
         </thead> 
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


<?php
   $select = mysqli_query($conn, "SELECT * FROM package3");
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
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<?php
      $select = mysqli_query($conn, "SELECT * FROM package4");

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
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


<?php
      $select = mysqli_query($conn, "SELECT * FROM package5");


   ?>
   <div class="product-display">
      <table class="product-display-table">
         <!-- <thead>
         <tr>
            <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th>
         </tr>
         </thead> -->
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<?php
      $select = mysqli_query($conn, "SELECT * FROM package6");


   ?>
   <div class="product-display">
      <table class="product-display-table">
         <!-- <thead>
         <tr>
            <th>package image</th>
            <th>package name</th>
            <th>package description</th>
            <th>action</th>
         </tr>
         </thead> -->
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
            ?>
         <tr>
            
            <!-- <td><img src="<?php echo $row['image']; ?>" height="100" widht="200" alt=""></td> -->
            <td><img src="images/<?php echo $row['image']; ?>" height="100" width="200" ></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

</body>
</html>