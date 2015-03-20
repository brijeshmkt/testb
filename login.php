<?php
include('includes/init.php');


if(isset($_POST['submit'])){

extract($_POST);


$sql = "SELECT `id` from `bid`.`auction_users` where username = '{$username}' AND password = '{$password}' LIMIT 1 ";

$userid = $db->getAll($sql);

	if(empty($userid)){
		$msg = "Invalid Username or password";
	}else{
		$userid = $userid[0]['id'];
		$username = $user->getUsername($userid);
		$msg = "Welcome $username";

		$_SESSION["userid"] = $userid;
		$_SESSION["username"] = $username;
	}
	

}
// Keeping logic in header //http://www.unieauction.com/platinum-demo/manageusers/index

include('header.php');
?>


<h1>Login</h1>

<div class="row register">

	<div class="col-md-8 form">
		
		<?php include('partials/loginform.php'); ?>
		
	</div>

	<div class="col-md-4">
		<h2>Login Using</h2>
		<p>Log In</p>	
	</div>

</div>
<?php include('footer.php'); ?>