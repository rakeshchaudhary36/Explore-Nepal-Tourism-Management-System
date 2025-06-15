<?php

   $connection = mysqli_connect('localhost','root','','book');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $package = $_POST['package'];
      $price = $_POST['price'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests,package,price, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$package','$price','$arrivals','$leaving') ";
      $result = mysqli_query($connection, $request);
      

      if($result)
      {
         ?>
         <script>
         alert('booking successful.Thank you');
      // header('location:index.html');

         </script>
         <!-- <p>If you want to cancel your booking please send us message at  explorenepal@gmail.com or contact us on +977-9860879509 or +977-9861290600.</p> -->
  <!-- <a href="index.php"> <button>Go to homepage</button> </a> -->
         
         <?php
      }
     
    /* 
$alert="<script>alert('Booking Successful.Thank You!');</script>";
echo $alert;


   }*/
   

   else{
      echo 'something went wrong please try again!';
   }
  //
  
  
  header('location:esewapay.php');
}
   
?>