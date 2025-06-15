<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">




 
</head>
<body>

<!-- booking section starts  -->
<section class="booking">

   <h1 class="heading-title">book your trip</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text"  name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="text" id="email" pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[com]{2,}))$' name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="tel" name="phone" id="phone" placeholder="enter your 10 digit phone number(98********)" pattern="[0-9]{10}">


         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text"  name="address" required>
         </div>
         <div class="inputBox"></span>
           <span>where to :
         <input type="text" readonly value="Muktinath" name="location">
         
         
            
         </div>


         <div class="inputBox">
            <span>how many:</span>
            <!-- <input type="tel" name="guests" id="phone"  pattern="^([0-9]{3}|[0-9]{2}|[0-9]{1})$"> -->
            <input type="number"  name="guests" min='1' onchange="totalprice(this.value)">


         </div>
         <div class="inputBox">
            <span>Package:</span>
            <input type="text" readonly value="Premium" name="package">
         </div>
         <div class="inputBox">
            <span>Price(Rs):</span>
            <!-- <input type="text" readonly value="Nrs. 25,000"name="price"> -->
            <input type="text" name="price"  id="total">

         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" id="demo1" required>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" id="demo2" required>
         </div>
      </div>
      <script>
            var date=new Date();
            var tdate= date.getDate();
            var month=date.getMonth()+1;
            if (tdate<10)
            {
                tdate='0'+ tdate;
            }
            if(month<10)
            {
                month='0'+month;
            }
            var year =date.getUTCFullYear();
            var minDate= year+"-" + month +"-" + tdate;
            document.getElementById("demo1").setAttribute('min',minDate);
            document.getElementById("demo2").setAttribute('min',minDate);
            </script>
      

      <input type="submit" value="book" class="btn" name="send">
         
   </form>
   <script> 
function totalprice(val){
   var t=val*25000;
   document.getElementById("total").value=t;
}
</script>
</section>

<!-- booking section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>