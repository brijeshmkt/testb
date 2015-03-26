<?php
include('init.php');


if(isset($_POST['submit'])){


extract($_POST);




$sql = " INSERT INTO `bid`.`auction_users` (`username`,`email`,`password`,`first_name`,`last_name`) VALUES 
('$username','$email','$password','$first_name','$last_name')";

echo $sql;

mysql_query($sql);
}
// Keeping logic in header //http://www.unieauction.com/platinum-demo/manageusers/index

include('header.php');
?>


<h1>Register</h1>

<div class="row register">

	<div class="col-md-8 form">
		
		<?php include('partials/form_user_registration.php'); ?>
		
	</div>

	<div class="col-md-4">
		<h2>Already Member?</h2>
		<p>Log In</p>	
	</div>

</div>
<?php include('footer.php'); ?>