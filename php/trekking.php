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

     <h1 class="heading"> <span>Trekking</span>/<span>Hiking</span> </h1>
    <!-- <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/everest.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Everest region trek </div>
                <p>Everest Base Camp Trek is regarded as one of the trendiest trails in Nepal.....</p>
                <a href="everest.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>


        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/annapurna.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Annapurna Region trek </div>
                <p>Annapurna Circuit Trek is one of the most popular trekking routes in the....</p>
                <a href="annapurna.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/lantang.jpeg" alt="">
            </div>
            <div class="content">
                <div class="price"> Langtang valley trek </div>
                <p>Langtang Valley Trek is one of the shortest treks in the..... </p>
                <a href="langtang.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/mardi.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Mardi himal trek </div>
                <p>Mardi Himal Trekking is one of the fascinating tropical trekking routes in the western part of....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/ghorepani.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Ghorepani poonhill trek </div>
                <p>Ghorepani Poonhill Trek, also known as Annapurna Sunrise Trekking...</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/gokyo.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Gokyo lake trek </div>
                <p>Gokyo Lakes Trek is one of the most adventurous and least traveled trekking routes in the....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pikey.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Pikey peak trek </div>
                <p>As with most treks in Nepal, Pikey Peak is incredible during the spring, fall, and...</p>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination14` order by id ASC";
    
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
            <a href="everest.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination15` order by id ASC";
    
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
            <a href="annapurna.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination16` order by id ASC";
    
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
            <a href="langtang.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination17` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination18` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination19` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination20` order by id ASC";
    
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