<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testing a site</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/jquery.countdown.css">
    <style type="text/css">
    #defaultCountdown { width: 240px; height: 45px; }
    </style>

    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    
    
    <script src="../js/jquery.plugin.js"></script>
    <script src="../js/jquery.countdown.js"></script>
    
  </head>
  <body>

  <div class="wrap topnav">
      <div class="container">
          <div class="notify">
              <strong>Alerts : </strong>
          </div>
          <div class="impmsg">
              <?php if (isset($msg)) echo $msg; ?>
          </div>
          <div class="social">
            
            <ul class="list-inline">
                <li><?php if(isset($_SESSION["username"])) {echo "You are logged in as " . $_SESSION["username"];} ?></li>
                <li><a href="index.php">Welcome Admin</a></li>
                <li><a href="login.php">My Info</a></li>
                <li><a href="register.php">Change Password</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>

              
          </div>
      </div>
  </div>


   
<div class="container">

<nav class="navbar navbar-inverse" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Dash Board</a>
   </div>
   <div>
      <ul class="nav navbar-nav">
         
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Users <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="manage_users.php">List Users</a></li>
               <li><a href="#">Send Emails</a></li>
               <li><a href="#">User Logins</a></li>
               
               <li><a href="#">Message Reports</a></li>
               
               <li><a href="#">Contact Request</a></li>
               <li><a href="#">Testimonials</a></li>

            </ul>
         </li>

         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Auction <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="manage_products.php">Manage Products</a></li>
               <li><a href="manage_category.php">Manage Category</a></li>
               <li><a href="#">Bid History</a></li>
               <li><a href="#">Auction Won List</a></li>
               <li><a href="#">Lowest Unique Bid Price</a></li>
               <li><a href="#">Scratch Bid History</a></li>
               <li><a href="#">Reserve Bid History</a></li>
               <li><a href="#">Reserve Bid Increment</a></li>
               <li><a href="#">Highest Unique Bid Price</a></li>
            </ul>
         </li>



         
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Masters <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="#">Manage Bid Packages</a></li>
               <li><a href="#">User Bonus</a></li>
               <li><a href="#">Bonus Settings</a></li>
               <li><a href="#">Manage Deposits</a></li>
               <li><a href="#">Manage Voucher</a></li>
               <li><a href="#">Payment Gateways</a></li>
               <li><a href="#">Manage Email Templates</a></li>
               <li><a href="#">Manage Modules</a></li>
              
            </ul>
         </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Transactions <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="#">Auction Order History</a></li>
               <li><a href="#">Transactions</a></li>
               <li><a href="#">Payment Transactions Log</a></li>
               <li><a href="#">Buy Now Transactions</a></li>
               <li><a href="#">Buy Now Transactions Log</a></li>
              
              
            </ul>
         </li>

                 <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               General Settings <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="#">Site Settings</a></li>
               <li><a href="#">Meta Settings</a></li>
               <li><a href="#">User Settings</a></li>
               <li><a href="#">Products Settings</a></li>
               <li><a href="#">Site Banner Settings</a></li>
               <li><a href="#">Site Ads Settings</a></li>
               <li><a href="#">SMTP Mail Settings</a></li>
               <li><a href="#">Manage Static Pages</a></li>
               
              
              
            </ul>
         </li>








      </ul>

      <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
              <li><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a target="_blank" href="../index.php">Go To Front</a></li>
              <li><a target="_blank" href="../info.php">System Info</a></li>
      </ul>
   </div>
</nav>