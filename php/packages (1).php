<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Nepal</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<div class="row">




<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'book');

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

$query = "SELECT `id`, `image`, `name`, `description` FROM `package` order by id ASC";

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
        <img src="<?php echo $product['image']; ?>" alt="image">
    </div>
    <div class="content">
        <div class="price"> <?php echo $product['name']; ?> </div>
        <!-- <p>This section includes various religious packages.</p> -->
        <p><?php echo $product['description']; ?></p>
        <a href="religious.html">read more <i class="fas fa-angle-right"></i></a>
    </div>
</div>


</div>

<?php
    }
}
 ?>

</div>
</body>
</html>