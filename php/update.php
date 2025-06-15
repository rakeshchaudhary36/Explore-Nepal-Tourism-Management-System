
<html>
    <head>
        <body>
            <h1 align="center">Update Booking<h1>
        <form  align="center" action="" method="post">
		<input type="text" name="id" placeholder="Enter id" required=""><br><br>
		<input type="text" name="name" placeholder="Name" required=""><br><br>
        <input type="email" placeholder="Enter your email" name="email" required=""><br><br>
        <input type="tel" name="phone" id="phone" placeholder="enter your 10 digit phone number" pattern="[0-9]{10}"><br><br>
        <!-- <input type="number" placeholder="Enter your number" name="phone" required=""><br><br> -->
        <input type="text" name="address" placeholder="Enter your address" required=""><br><br>
        <input type="number" placeholder="No. of Guests" min="1" name="guests" required=""><br><br>
        <input type="date" name="arrivals" id="demo1">
        <input type="date" name="leaving" id="demo2">
        

		<button class="btn btn-default" type="submit" name="submit">Update</button>
		</form>	
</div>
<?php
include('security.php');
if(isset($_POST['submit']))
{
	if(mysqli_query($connection,"UPDATE book_form SET name='$_POST[name]', email='$_POST[email]', phone='$_POST[phone]', address='$_POST[address]', guests='$_POST[guests]',arrivals='$_POST[arrivals]', leaving='$_POST[leaving]' WHERE id='$_POST[id]' ;"))
{
	?>
	<script type="text/javascript">
		alert("The password has been updated successfully.");
	</script>
<?php
}
}
?>
</body>
</html>