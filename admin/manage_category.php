<?php
include('../init.php');

if(isset($_GET['edit'])){
  $catid = $_GET['edit'];

}

if(isset($_POST['categoryid'])){

  
  $catid = $_POST['categoryid'];
  $catname = $_POST['inputAddCategory'];


  $sql = "UPDATE auction_categories SET category = '$catname' where id = '$catid' ";

  
  mysql_query($sql);
  unset($_GET);
}





$sql = "SELECT * FROM auction_categories";

$data = $db->getAll($sql);

include('header.php');
?>


<div class="alert alert-success" id="responsemsg"></div>
<div class="table_header">

	<div class="admin_tbl_title"><h4>Manage Category</h4></div>
	
	<button id="addCategoryBtn" class="btn btn-primary addCategoryBtn">Add</button>

</div>

<?php if(isset($_GET['edit'])){ ?>

<form class="form-inline" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

        <div class="form-group">

            <input type="text" class="form-control" id="inputAddCategory" name="inputAddCategory" value="<?php  echo $category->getName($catid); ?>">
            
            <input type="text" name="categoryid" value="<?php echo $catid = $_GET['edit']; ?>">

            


        </div>

        <input type="submit" name="editcategory" value="Edit" >

</form>

<?php }else{ ?>

    <form id="categoryform" name="categoryform" class="form-inline" method="post">

        <div class="form-group">

            <input type="text" class="form-control" id="inputAddCategory" name="inputAddCategory" placeholder="Category Name">
            
            

            <input type="hidden" class="form-control" id="addCategorySubmit" name="addCategorySubmit">


        </div>

        <button id="submitCategory" name="submitCategory" class="btn btn-primary">Add</button>

    </form>

<?php } ?>



</table>

<table class="table table-bordered">
   
   <thead>
      <tr>
         <th>Select</th>
         <th>S.No</th>
         <th>Category</th>
        <!--  <th>Product Count</th> -->
         
         <th>Edit</th>
         <th>Delete</th>




      </tr>
   </thead>
   <tbody>
      

      <?php foreach ($data as $value){ ?>
      <tr>
        
         <td><?php echo $value['id'] ?></td>          

         <td><?php echo $value['category'] ?></td>  
         <td><?php echo $value['status'] ?></td>
         <td>
            <a href="?edit=<?php echo $value['id'] ?>">Edit</a>
          </td>   
          <td>
          <button id="deleteCategory" data-categoryid="<?php echo $value['id'] ?>" type="button" class="btn btn-danger">Delete</button>
          </td>       
      </tr>
      <?php } ?>
        

      
      
   </tbody>
</table>



<?php include('footer.php'); ?>