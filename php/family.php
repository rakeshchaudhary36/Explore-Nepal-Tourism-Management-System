<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="religious.css">
</head>
<body>
     <section class="package" id="package">

     <h1 class="heading"> <span>Family</span> </h1>

    <!-- <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/mustang.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Mustang </div>
                <p>Mustang District is one of the eleven districts of Gandaki Province...</p>
                <a href="mustang.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>


        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/upper.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Upper Mustang </div>
                <p>Upper Mustang, one of the most picturesque and exciting landscape in the Nepalese....</p>
                <a href="upper.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/Ghandruk.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Pokhara-Ghandruk </div>
                <p>Pokhara to Ghandruk is approx. 55 KM distance which can be reached....</p>
                <a href="pghandruk.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/chitwan.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Chitwan National park </div>
                <p>Chitwan National Park is the first national park in Nepal. Formerly called Royal....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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
                <img src="images/rara.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Rara Lake </div>
                <p>Rara Lake also known as Mahendra Lake is the largest fresh water lake....</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/gosaikunda.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Gosaikunda Lake </div>
                <p>Gosaikunda, also spelled Gosainkunda, is an alpine freshwater oligotrophic lake....</p>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination28` order by id ASC";
    
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
            <a href="mustang.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination29` order by id ASC";
    
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
            <a href="upper.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination30` order by id ASC";
    
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
            <a href="pghandruk.html">read more <i class="fas fa-angle-right"></i></a>
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination31` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination32` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination33` order by id ASC";
    
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
    
    $query = "SELECT `id`, `image`, `name`, `details` FROM `destination34` order by id ASC";
    
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