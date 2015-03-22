<?php
include('../init.php');


if(isset($_POST['addProduct'])){
   
  
  print_r($_POST);

// $date = $_POST['start_date'];
// $dd=date_create($date);


  extract($_POST);
//$start_date=date_format($dd,"Y-m-d");
  if( $_FILES['image']['name'] != "" ){
      move_uploaded_file($_FILES["image"]["tmp_name"],"../files/products/". $_FILES["image"]["name"]);
      $image = $_FILES['image']['name'];
   }else {
       //die("No file specified!");
   }

  
   $sql = "INSERT INTO auction_products 
      (name, category_id,  image, description ,short_description, 
         opening_price, lowest_bid_price, bid_price, 
         start_date, end_date, buy_now_price, payment_method, shipping_amount, shipping_information, created_at ) 
         VALUES 
      ('$name', '$category_id', '$image', '$description', '$short_description', 
       '$opening_price', '$lowest_bid_price', '$bid_price', 
       '$start_date', '$end_date', '$buy_now_price', '$payment_method', '$shipping_amount', '$shipping_information' ,'".time()."') ";

   $result = mysql_query($sql);

   if($result)
      $msg = "Product added";
   else
      $sql;
   

}

include('header.php');
?>



<div class="table_header">

	<div class="admin_tbl_title"><h4>Add Auction</h4></div>
	
	<button id="addCategoryBtn" class="btn btn-primary addCategoryBtn">Add</button>

</div>


    
<?php include('partials/add_auction_form.php') ?>
    





<?php include('footer.php'); ?>