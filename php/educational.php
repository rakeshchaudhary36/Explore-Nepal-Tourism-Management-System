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

     <h1 class="heading"> <span>Educational</span> </h1>

    <!-- <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/durbar.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Durbar Squares </div>
                <p> Walkthrough the palace square and discover a treasure trove of art in stone, wood..... </p>
                <a href="Durbar.html">read more <i class="fas fa-angle-right"></i></a>
            </div> 
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pokhara.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Chitwan-Lumbini-Pokhara </div>
                <p>Chitwan Lumbini Pokhara Tour package is a combination of mountain scenery....</p>
                <a href="chitwan.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/bandipur.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Gorkha-Bandipur-Palpa </div>
                <p>Gorkha-Bandipur-Palpa Tour will provide the visitors with the golden opportunity....</p>
                <a href="gorkha.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/illam.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Illam </div>
                <p>Illam district is one of 14 districts of Province No. 1 of eastern Nepal. It is a Hill district....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/zoo.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Zoo </div>
                <p>The Central Zoo, with an area of about 6 ha., provides shelter to a total of 942 individua....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/botanical.avif" alt="">
            </div>
            <div class="content">
                <div class="price"> Godawari Botanical Garden </div>
                <p>It is located at the base of Mt. Phulchowki (2765 m), the highest peak of the....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/Ghandruk.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Ghandruk Educational Tour </div>
                <p>Ghandruk is a Village Development Committee in the Kaski District of the....</p>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination21` order by id ASC";
    
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
            <a href="Durbar.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination22` order by id ASC";
    
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
            <a href="chitwan.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination23` order by id ASC";
    
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
            <a href="gorkha.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination24` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination25` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination26` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination27` order by id ASC";
    
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