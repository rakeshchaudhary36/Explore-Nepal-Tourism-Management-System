<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Nepal</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
   <style>
 

.contain{
  width: 100%;
  height: 240px;
}

.slider{
  margin: 0 40px;
  height: 100%;
  overflow: hidden;
  position: relative;
}

.slider .image-items{
  height: 100%;
}

.slider .image-items .image{
  height: 100%;
}

.slider .image-items .image img{
  height: 100%;
  display: block;
  width: 100%;
  object-fit: cover;
  border-radius: 15px;
}

/* .slider .image-items .image img:hover{
    border: 2px solid red;
} */
.overlay{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.75);
    overflow: hidden;
    width: 100%;
    height: 0;
    transition: .5s ease;
}
.swiper-slide:hover .overlay{
    height: 100%;
}
h5{
    width: 100%;
    margin-top: 50%;
    color: white;
    font-size: 2.5rem;
    position: absolute;
    text-align: center;
    transform: rotate(-5deg)skewX(-5deg);
}
.arrowButton{
  position: absolute !important;
  top: 50% !important;
  color: black !important;
  width: 50px !important;
  height: 50px !important;
  border-radius: 50% !important;
  background-color: white !important;
  padding: 10px !important;
}

.arrowButton.left{
  left: 0 !important;
}

.arrowButton.right{
  right: 0 !important;
}

.arrowButton::after{
  font-size: 20px !important;
}


</style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#home" class="logo"> <img class="img" src="images/logo.png" alt="logo"><span>E</span>xplore <span>N</span>epal</a>


    <nav class="navigation">
        <a href="#home">home</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">about us</a>
        <a href="#contact">contact</a>
        
    </nav>
<ul type="none">
    <li>
        <a href="admin.php" class="btn">admin login</a>
     
    </li>
</ul>




</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <!-- <div class="image" data-aos="fade-down">
        <img src="images/home-img.svg" alt="">
    </div> -->

    <div class="content" data-aos="fade-up">
        <h3>adventure is worthwhile</h3>
        <p>Discover new places with us, Adventure Awaits</p>
        <a href="#packages" class="btn">explore now</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid8.mp4"></span>
        <span class="vid-btn" data-src="images/vid4.mp4"></span>
        <span class="vid-btn" data-src="images/vid1.mp4"></span>
        <span class="vid-btn" data-src="images/vid2.mp4"></span>
        <span class="vid-btn" data-src="images/vid3.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid8.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>




<section class="trend" id="trend">
<h1 class="heading"><span>Recommended</span> <span>Winter</span> <span>Destination </span></h1>
    
    <div class="contain"  data-aos="zoom-in">
          <div class="slider mySwiper">
              <div class="image-items swiper-wrapper">
                  <div class="image swiper-slide">
                    <img src="images/kalinchowk.jpg" alt="">
                    <div class="overlay">
                        <a href="kalinchowk.html"><h5>Kalinchowk Darshan</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/pokhara.jpg" alt="">
                    <div class="overlay">
                        <a href="chitwan.html"><h5>Pokhara</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/bandipur.jpg" alt="">
                    <div class="overlay">
                        <a href="gorkha.html"><h5>Bandipur</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/chitwan.jpg" alt="">
                    <div class="overlay">
                        <a href="#"><h5>chitwan</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/ghorepani.jpg" alt="">
                    <div class="overlay">
                        <a href="#"><h5>Ghorepani Poon Hill</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/pikey.jpg" alt="">
                    <div class="overlay">
                        <a href="#"><h5>pikey peak</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/mardi.jpg" alt="">
                    <div class="overlay">
                        <a href="#"><h5>mardi himal</h5></a>
                    </div>
                </div>

                  
              </div>
              <div class="swiper-button-next arrowButton right"></div>
              <div class="swiper-button-prev arrowButton left"></div>
          </div>
      </div>
  
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerGroup: 1,
          loop: true,
          fade: true,
          grabCursor: true,
          loopFillGroupWithBlank: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
            500: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            868: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            1000: {
              slidesPerView: 4,
              spaceBetween: 30,
            },
            1250: {
              slidesPerView: 5,
              spaceBetween: 30,
            },
          },
        });
      </script>
</section>

<section class="trend" id="trend">
<h1 class="heading"><span>Recommended</span> <span>Summer</span> <span>Destination </span></h1>
    
    <div class="contain"  data-aos="zoom-in">
          <div class="slider mySwiper">
              <div class="image-items swiper-wrapper">
             


              <div class="image swiper-slide">
                    <img src="images/mustang.jpg" alt="">
                    <div class="overlay">
                        <a href="mustang.html"><h5>Mustang</h5></a>
                    </div>
                    </div>



                <div class="image swiper-slide">
                    <img src="images/ghandruk.jpg" alt="">
                    <div class="overlay">
                        <a href="pghandruk.html"><h5>Ghandruk </h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/everest.jpg" alt="">
                    <div class="overlay">
                        <a href="everest.html"><h5>Everest region trek</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/annapurna.jpg" alt="">
                    <div class="overlay">
                        <a href="annapurna.html"><h5>Annapurna trek</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/lantang.jpeg" alt="">
                    <div class="overlay">
                        <a href="langtang.html"><h5>Langtang Valley trek</h5></a>
                    </div>
                </div>
                <div class="image swiper-slide">
                    <img src="images/gokyo.jpg" alt="">
                    <div class="overlay">
                        <a href="#"><h5>Gokyo lake </h5></a>
                    </div>
                </div>
                
                    <div class="image swiper-slide">
                    <img src="images/illam.jpg" alt="">
                    <div class="overlay">
                        <a href="#"><h5>illam</h5></a>
                    </div>
                </div>
              </div>
              <div class="swiper-button-next arrowButton right"></div>
              <div class="swiper-button-prev arrowButton left"></div>
          </div>
      </div>
  
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerGroup: 1,
          loop: true,
          fade: true,
          grabCursor: true,
          loopFillGroupWithBlank: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
            500: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            868: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            1000: {
              slidesPerView: 4,
              spaceBetween: 30,
            },
            1250: {
              slidesPerView: 5,
              spaceBetween: 30,
            },
          },
        });
      </script>
</section>
<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"><span>Packages</span> </h1>

    <!-- <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/chandragiri.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Religious </div>
                <p>This section includes various religious packages.</p>
                <a href="religious.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/paragliding1.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Adventure Sports </div>
                <p>This section includes packages with adventurous sports.</p>
                <a href="adventure.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/trekking.jpeg" alt="">
            </div>
            <div class="content">
                <div class="price"> Trekking/Hiking </div>
                <p>This section includes various trekking/hiking packages.</p>
                <a href="trekking.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/education.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Educational </div>
                <p>This section includes various educational packages.</p>
                <a href="educational.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/family.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Family </div>
                <p>This section includes various packages for family.</p>
                <a href="family.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/couple.jpg" alt="">
            </div>
            <div class="content">
                <div class="price"> Couple </div>
                <p>This section includes various packages for couples.</p>
                <a href="couple.html">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div> -->





    <!-- <div class="row"> -->




<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');
$query = "SELECT `id`, `image`, `name`, `description` FROM `package` order by id ASC";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>
<div class="box-container">
<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <!-- <img src="<?php echo $product['image']; ?>" > -->
      <img src="images/<?php echo $product['image']; ?>" height="100" alt="">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="religious.php">read more <i class="fas fa-angle-right"></i></a>
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
$query = "SELECT `id`, `image`, `name`, `description` FROM `package1` order by id ASC";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>
<div class="box-container">
<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <!-- <img src="<?php echo $product['image']; ?>" > -->
      <img src="images/<?php echo $product['image']; ?>" height="100" alt="">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="adventure.php">read more <i class="fas fa-angle-right"></i></a>
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
$query = "SELECT `id`, `image`, `name`, `description` FROM `package2` order by id ASC";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>
<div class="box-container">
<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <!-- <img src="<?php echo $product['image']; ?>" > -->
      <img src="images/<?php echo $product['image']; ?>" height="100" alt="">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="trekking.php">read more <i class="fas fa-angle-right"></i></a>
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
$query = "SELECT `id`, `image`, `name`, `description` FROM `package3` order by id ASC";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>
<div class="box-container">
<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <!-- <img src="<?php echo $product['image']; ?>" > -->
      <img src="images/<?php echo $product['image']; ?>" height="100" alt="">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="educational.php">read more <i class="fas fa-angle-right"></i></a>
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
$query = "SELECT `id`, `image`, `name`, `description` FROM `package4` order by id ASC";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>
<div class="box-container">
<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <!-- <img src="<?php echo $product['image']; ?>" > -->
      <img src="images/<?php echo $product['image']; ?>" height="100" alt="">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="family.php">read more <i class="fas fa-angle-right"></i></a>
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
$query = "SELECT `id`, `image`, `name`, `description` FROM `package5` order by id ASC";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>
<div class="box-container">
<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <!-- <img src="<?php echo $product['image']; ?>" > -->
      <img src="images/<?php echo $product['image']; ?>" height="100" alt="">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="couple.php">read more <i class="fas fa-angle-right"></i></a>
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
$query = "SELECT `id`, `image`, `name`, `description` FROM `package6` order by id ASC";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>
<div class="box-container">
<div class="box" data-aos="fade-up">
    <div class="image">
        <!-- <img src="images/chandragiri.jpg" alt=""> -->
        <!-- <img src="<?php echo $product['image']; ?>" > -->
      <img src="images/<?php echo $product['image']; ?>" height="100" alt="">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>
</div>
<?php
    }
}
 ?>
</section>



<!-- packages section ends -->





<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <span>01</span>
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p> -->
        </div>

        <div class="box" data-aos="zoom-in">
            <span>02</span>
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p> -->
        </div>

        <div class="box" data-aos="zoom-in">
            <span>03</span>
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p> -->
        </div>

        <div class="box" data-aos="zoom-in">
            <span>04</span>
            <i class="fas fa-globe"></i>
            <h3>around nepal</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p> -->
        </div>

        <div class="box" data-aos="zoom-in">
            <span>05</span>
            <i class="fas fa-hiking"></i>
            <h3>new adventures</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p> -->
        </div>

        <div class="box" data-aos="zoom-in">
            <span>06</span>
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p> -->
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- pricing section starts  -->




<!-- 
<section class="pricing" id="pricing">

    <h1 class="heading"> our <span>pricing</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>$</span>
                <span class="amount">30</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>10 days</li>
                <li>food and drinks</li>
                <li>safty guide</li>
                <li>insurance</li>
                <li>luxury hotel</li>
            </ul>
            <a href="#" class="btn">choose plan</a>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>$</span>
                <span class="amount">50</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>20 days</li>
                <li>food and drinks</li>
                <li>safty guide</li>
                <li>insurance</li>
                <li>luxury hotel</li>
            </ul>
            <a href="#" class="btn">choose plan</a>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>$</span>
                <span class="amount">90</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
                <li>safty guide</li>
                <li>insurance</li>
                <li>luxury hotel</li>
            </ul>
            <a href="#" class="btn">choose plan</a>
        </div>

    </div>

</section>
 -->
 <!-- pricing section ends -->








    











<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>
     <div class="container">
        <h1 class="heading">we record memories</h1>
        <div class="image-container">
        
            <div class="gallery" data-aos="zoom-in">
                <!-- <div class="image">
                    <img src="images/p-1.jpg" alt="">
                     <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3> -->
                <!-- </div> -->
                <!-- <div class="image">
                    <img src="images/p-1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="images/p-1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="images/p-1.jpg" alt="">
                </div> --> 
                <a href="images/gallery/annapurna1.jpg">
                    <img src="images/gallery/annapurna1.jpg" height="300" width="300">
                    </a>
                </div>
                <div class="gallery" data-aos="zoom-in">
                    <a href="images/gallery/bungee1.jpg">
                        <img src="images/gallery/bungee1.jpg" height="300" width="300">
                        </a>
                    </div>
                    <div class="gallery" data-aos="zoom-in">
                    <a href="images/gallery/chitwan1.jpg">
                        <img src="images/gallery/chitwan1.jpg" height="300" width="300">
                        </a>
                    </div>
                    <div class="gallery" data-aos="zoom-in">
                        <a href="images/gallery/gokyo.jpg">
                        <img src="images/gallery/gokyo.jpg" height="300" width="300">
                        </a>
                        </div>
                        <div class="gallery" data-aos="zoom-in">
                        <a href="images/gallery/mardi.jpg">
                            <img src="images/gallery/mardi.jpg" height="300" width="300">
                            </a>
                        </div>
                            <div class="gallery" data-aos="zoom-in">
                            <a href="images/gallery/paragliding.jpg">
                                <img src="images/gallery/paragliding.jpg" height="300" width="300">
                                </a>
                            </div>
            <!-- </div> -->


</section>



<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> About <span>Us</span> </h1>

    <div class="swiper-container review-slider" data-aos="zoom-in">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/aashish.jpg" alt="">
                <h3>Aashish Pandey</h3>
                <p>Hi, I’m Aashish Pandey. I’m  currently studying Bachelors in Computer Engineering at Khwopa Engineering College and this is our 5th semester project.</p>
            </div>

             <div class="swiper-slide slide">
                <img src="images/ishan.jpg" alt="">
                <h3>Ishan Bista</h3>
                <p>Hi, I’m Ishan Bista. I’m  currently studying Bachelors in Computer Engineering at Khwopa Engineering College and this is our 5th semester project.</p>
            </div>

             <div class="swiper-slide slide"> 
                <img src="images/Oman.jpg" alt="">
                <h3>Oman Neupane</h3>
                <p>Hello, My name is Oman Neupane. I'm a student at Khwopa engineering College studying Bachelors of Computer Engineering and this is our 5th semester project.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/rakesh.jpg" alt="">
                <h3>Rakesh Kumar Chaudhary</h3>
                <p>
                    Hello, My name is Rakesh Kumar Chaudhary. I'm a student at Khwopa engineering College studying Bachelors of Computer Engineering and this is our 5th semester project.</p>
            </div> 

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>





<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form data-aos="zoom" onsubmit="sendEmail(); reset(); return false;">

        <div class="inputBox">
            <input type="text" id="name"placeholder="Enter your name" data-aos="fade-up" required="">
            <input type="text" id="email"placeholder="Enter your email" data-aos="fade-up" required="">
        </div>

        <div class="inputBox">
            <input type="text" id="phone" placeholder="Phone number" data-aos="fade-up">
            
        </div>

        <textarea name="" id="message"placeholder="How can i help you?" cols="30" rows="10" data-aos="fade-up"></textarea>
        
        <input type="submit" value="send message" class="btn">

    </form>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
      function sendEmail(){
       
        Email.send({
          Host : "smtp.elasticemail.com",
        Username : "neupaneoman90@gmail.com",
        Password : "6FE32C7133E5AA3435E29A3D8BE89133690B",
        To : 'neupaneoman90@gmail.com',
        From : "mahuishan123@gmail.com",
        Subject : "New Contact Form Enquiry",
        Body : "Name:"+ document.getElementById("name").value+"<br> Email:"+ document.getElementById("email").value+ "<br> Phone:"+ document.getElementById("phone").value+"<br> Message:"+ document.getElementById("message").value
       }).then(
       message => alert("Message Sent Successfully")
       );
                 }
    </script>

</section>

<!-- blog section starts  -->




<!-- 
<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-1.svg" alt="">
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-2.svg" alt="">
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-3.svg" alt="">
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

    </div>

</section> -->

<!-- blog section ends -->






<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Kathmandu </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Bhaktapur </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Pokhara </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#packages"> <i class="fas fa-chevron-right"></i> packages </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#gallery"> <i class="fas fa-chevron-right"></i> gallery </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> about us </a>
            <a href="#contact"> <i class="fas fa-chevron-right"></i> contact </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +977-9860879509 </a>
            <a href="#"> <i class="fas fa-phone"></i> +977-9861290600 </a>
            <a href="#"> <i class="fas fa-envelop"></i> explorenepal@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal - 44800 </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-telegram"></i> telegram </a>
        </div>

    </div>

    <div class="credit"> copyright @2023 | all rights reserved </div>

</section>

<!-- footer section ends -->








<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:300
});

</script>

</body>
</html>