<?php
include('../init.php');


if(isset($_POST['addProduct'])){
   
  
  extract($_POST);

  if( $_FILES['image']['name'] != "" ){
      move_uploaded_file($_FILES["image"]["tmp_name"],"../files/products/". $_FILES["image"]["name"]);
      $image = $_FILES['image']['name'];
   }else {
       die("No file specified!");
   }

  
   $sql = "INSERT INTO auction_products 
      (name, category_id, tags, image, description ,product_tags, shipping_amount, shipping_information, created_at) 
         VALUES 
      ('$name', '$category_id', '$tags', '$image', '$description', '$product_tags', '$shipping_amount', '$shipping_information' ,'".time()."') ";

   $result = mysql_query($sql);

   if($result)
      $msg = "Product added";
   else
      $sql;
   

}

// if(isset($_POST['editProduct'])){
   
//    print_r($_POST);
//    extract($_POST);

//    echo "edit";
   
   

// }



if(isset($_GET['action'])){
   if($_GET['action'] == 'edit'){

      $id = $_GET['id'];
      $table = "products";

      $editproduct = $db->getOne($table, $id);

     
   }
}

$sql = "select * from auction_products";
$products = $db->getAll($sql);



include('header.php');
?>



<div class="table_header">

	<div class="admin_tbl_title"><h4>Manage Products</h4></div>
	
	<button id="addCategoryBtn" class="btn btn-primary addCategoryBtn">Add</button>

</div>


    
<?php include('partials/productform.php') ?>
    




</table>

<table class="table table-bordered">
   
   <thead>
      <tr>
         
         <th>S.No</th>
         <th>Name</th>
         <th>Edit</th>
         <th>Delete</th>




      </tr>
   </thead>
   <tbody>
      <?php foreach ($products as $product): ?>
      <tr>
         <td><?php echo $product['id']; ?> </td>
         <td><?php echo $product['name']; ?> </td>
         
         <td><a href="?action=edit&id=<?php echo $product['id'];  ?>">Edit</a></td>
         <td>Delete</td>

      </tr>
   <?php endforeach; ?>
     
      
   </tbody>
</table>



<?php include('footer.php'); ?>