<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="religious.css">

</head>
<body>
     <section class="package" id="package">

     <h1 class="heading">Adventure <span>Sports</span> </h1>

   <!--  <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/bungee.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Bungee/Swing </div>
                <p>If you are looking for some thrill in the country....</p>
                <a href="bungee.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>


        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/rafting.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Rafting </div>
                <p>Nepal is a land of numerous world class rivers which provide fun and exciting river rafting....</p>
                <a href="rafting.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/wall.jpeg" alt="">
            </div>
            <div class="content">
                <div class="price"> Wall climbing </div>
                <p>Wall climbing in Nepal is an indoor sports/activity that requires full-body workout and skills....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/mountainbiking.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Mountain Biking </div>
                <p>Mountain biking is the fastest growing sport in Nepal, with great single track and multi-day adventures throughout the Himalaya...</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/paragliding2.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Paragliding </div>
                <p>Paragliding is an adventure sport which solely depends on the weather and the....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/canyoning.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Canyoning </div>
                <p>Canyoning is an amazing full body and mind experience that enables you to explore....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/zipline.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Zipline </div>
                <p>Zipflyer Nepal is, in fact, one of the world's longest, fastest and steepest ziplines....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    
    </div>-->

     <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination7` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<!-- <div class="col-lg-3 col-md-3 col-sm-12"> -->
<div class="box-container">

<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <img src="images/<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['details']; ?></p>
        <a href="bungee.html">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>

<?php
    }
}
 ?>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination8` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<!-- <div class="col-lg-3 col-md-3 col-sm-12"> -->
<div class="box-container">

<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <img src="images/<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['details']; ?></p>
        <a href="rafting.html">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>

<?php
    }
}
 ?>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination9` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<!-- <div class="col-lg-3 col-md-3 col-sm-12"> -->
<div class="box-container">

<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <img src="images/<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['details']; ?></p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>

<?php
    }
}
 ?>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination10` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<!-- <div class="col-lg-3 col-md-3 col-sm-12"> -->
<div class="box-container">

<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <img src="images/<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['details']; ?></p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>

<?php
    }
}
 ?>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination11` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<!-- <div class="col-lg-3 col-md-3 col-sm-12"> -->
<div class="box-container">

<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <img src="images/<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['details']; ?></p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>

<?php
    }
}
 ?>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination12` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<!-- <div class="col-lg-3 col-md-3 col-sm-12"> -->
<div class="box-container">

<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <img src="images/<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['details']; ?></p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>

<?php
    }
}
 ?>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination13` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<!-- <div class="col-lg-3 col-md-3 col-sm-12"> -->
<div class="box-container">

<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <img src="images/<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['details']; ?></p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>

<?php
    }
}
 ?>
     </section>

</body>
</html>