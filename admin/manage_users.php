<?php
include('../init.php');

// Keeping logic in header
$sql = "select * from auction_users";
$users = $db->getAll($sql);
include('header.php');
?>

<div class="table_header">

	<div class="admin_tbl_title"><h4>Manage Users</h4></div>
	
	<button id="addCategoryBtn" class="btn btn-primary addCategoryBtn">Add</button>

</div>

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
   <?php foreach ($users as $key => $user): ?>
   	
   		<tr>
      		<td><?= $user['id']  ?></td>
      		<td><?= $user['username']  ?></td>
      		<td>Edit</td>
      		<td>Delete</td>
      	</tr>
      
   <?php endforeach ?>
      
   </tbody>
</table>






<?php include('footer.php'); ?>