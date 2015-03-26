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
         
         <th>Name</th>
         <th>Image</th>
         <th>Details</th>
         <th>Current Price</th>
         <th>Bids Placed</th>
         <th>Ending</th>
         <th>Bid Now</th>
      </tr>
   </thead>

<tbody>
<?php foreach ($res as $key => $value): ?>
	<tr>
		
		<td><?= $value['name']; ?></td>
		<td><?= $value['image']; ?></td>
    <td><?= $value['short_description']; ?></td>
    <td><?= $value['opening_price']; ?></td>
    <td>Bids Placed</td>
    <td><?= $value['end_date']; ?></td>

		<td><a href="product.php?id=<?= $value['id'] ?>">View</a></td>
	</tr>
<?php endforeach ?>
</tbody>
</table>



<?php include('footer.php'); ?>