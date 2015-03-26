<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testing a site</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/jquery.countdown.css">
    <style type="text/css">
    #defaultCountdown { width: 240px; height: 45px; }
    </style>

    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    
  </head>
  <body>

  <div class="wrap topnav">
      <div class="container">
          <div class="notify">
              <strong>Notification : </strong>
          </div>
          <div class="impmsg">
              <?php if (isset($msg)) echo $msg; ?>
          </div>
          <div class="social">
            
            <ul class="list-inline">

              <?php if(isset($_SESSION["username"])){ ?>
                <li><?php echo "Hello " . $_SESSION["username"]; ?></li>
                  
                  <?php 
                    $userid = $_SESSION['userid'];  
                    $user = $db->getOne('users', $userid);
                    
                  ?>
                <li>Your Account Balance is INR <?= $user['balance'];  ?></li>
                <li><a href="">Profile</a></li>
                <li><a href="">Watch List</a></li>

                <li><a href="">Add Balance</a></li>
                <li><a href="">Transactions</a></li>
                <li><a href="">My Bids</a></li>
                <li><a href="logout.php">logout</a></li>


               <?php }else{ ?>

                
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="register.php">Register</a></li>
                
                <?php } ?>
            </ul>

              
          </div>
      </div>
  </div>
   
  

<div class="container">

<?php include('partials/main_nav.php') ?>