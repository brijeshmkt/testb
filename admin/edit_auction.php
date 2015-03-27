<?php
include('../init.php');

$productid = $_GET['productid'];

$auction = $db->getOne("products",$productid);

//$common->pr($auction);


if(isset($_POST['editproduct'])){

  unset($_POST['editproduct']);

  if( $_FILES['image']['name'] != "" ){
      move_uploaded_file($_FILES["image"]["tmp_name"],"../files/products/". $_FILES["image"]["name"]);
      $_POST['image'] = $_FILES['image']['name'];
   }else {
       
       unset($_POST['image']);
   }




  $query = "UPDATE auction_products ";
  $query .= " SET ";

  foreach ($_POST as $key => $value) {
    
    if ($value === end($_POST))
        $query .= "$key = '$value' " ;
    else
      $query .= "$key = '$value', " ;    

  }

  $query .= " Where id = '$productid' ";


  if(mysql_query($query)){
    header("Location: all_auctions.php");
    die(); 
  }

}


include('header.php');
?>



<div class="table_header">

	<div class="admin_tbl_title"><h4>Edit Auction</h4></div>
	
	<button id="addCategoryBtn" class="btn btn-primary addCategoryBtn">Add</button>

</div>


    
<?php include('partials/edit_auction_form.php') ?>
    





<?php include('footer.php'); ?>