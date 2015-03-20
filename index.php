<?php
include('init.php');


// Keeping logic in header http://www.unieauction.com/platinum-demo/users/signup
$query = "select * from auction_products";
$res = $db->getAll($query);

include('header.php');

?>

<h1>Lists</h1>

<table class="table table-striped table-hover">
  <thead>
      <tr>
         <th>S.No</th>
         <th>Name</th>
         <th>Image</th>
         <th>View</th>
      </tr>
   </thead>

<tbody>
<?php foreach ($res as $key => $value): ?>
	<tr>
		<td><?= $value['id']; ?></td>
		<td><?= $value['name']; ?></td>
		<td><?= $value['image']; ?></td>
		<td><a href="">View</a></td>
	</tr>
<?php endforeach ?>
</tbody>
</table>



<?php include('footer.php'); ?>