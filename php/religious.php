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

     <h1 class="heading">Religious <span>Packages</span> </h1>

    <!-- <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/muktinath.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Muktinath Darshan </div>
                <p>Muktinath Is A Vishnu Temple, Sacred To Both Hindus And Buddhists. It Is........</p>
                <a href="muktinath.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>


        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/kalinchowk.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Kalinchowk Darshan </div>
                <p>Kalinchok Bhagwati Temple is a Hindu shrine located in the eastern hilly......</p>
                <a href="kalinchowk.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/halesi.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Halesi Mahadev Darshan </div>
                <p>Halesi Mahadev is situated in the Khotang district of eastern Nepal. The temple lies inside a....</p>
                <a href="halesi.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pathivara.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Pathivara Darshan </div>
                <p>Pathibhara Devi is one of the most significant temples in Nepal. It is...</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/janaki.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Janaki Mandir </div>
                <p>Janaki Mandir is a Hindu temple in Janakpur, Nepal, dedicated to the Hindu goddess Sita. It is...</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/lumbini.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Lumbini Darshan </div>
                <p>Siddhartha Gautama, the Lord Buddha, was born in 623 B.C. in....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pashupati.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Pashupati, Dakhsinkali, Chandragiri Darshan </div>
                <p>Pashupatinath Temple is a Hindu temple dedicated to Lord Pashupati, and is located in Kathmandu, Nepal near the sacred...</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    
    </div> -->
    
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination` order by id ASC";

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
        <a href="muktinath.html">read more <i class="fas fa-angle-right"></i></a>
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

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination1` order by id ASC";

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
        <a href="kalinchowk.html">read more <i class="fas fa-angle-right"></i></a>
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

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination2` order by id ASC";

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
        <a href="halesi.html">read more <i class="fas fa-angle-right"></i></a>
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

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination3` order by id ASC";

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

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination4` order by id ASC";

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

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination5` order by id ASC";

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

$query = "SELECT `id`, `image`, `name`, `details` FROM `destination6` order by id ASC";

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