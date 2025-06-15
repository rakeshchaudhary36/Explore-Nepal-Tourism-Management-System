<?php

include('setting.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         <p><b>If you want to cancel your booking please send us message at  explorenepal@gmail.com or contact us on +977-9860879509 or +977-9861290600.<b></p>

<form action="<?php echo $epay_url ?>" method="POST">
    <input value="12000" name="tAmt" type="hidden">
    <input value="11900" name="amt" type="hidden">
    <input value="50" name="txAmt" type="hidden">
    <input value="20" name="psc" type="hidden">
    <input value="30" name="pdc" type="hidden">
    <input value="epay_payment" name="scd" type="hidden">
    <input value="<?php echo $pid ?>" name="pid" type="hidden">
    <!-- <input value="" type="hidden" name="su"> -->
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <input value="Pay with E sewa"class="btn btn-primary" type="submit">
    </form>
</body>
</html>