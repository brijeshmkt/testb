<?php
include('init.php');

if(isset($_GET['catid'])){
  $catid = $_GET['catid'];
  $query = "select * from auction_products WHERE category_id =  $catid ORDER BY id DESC";
}else{
  $query = "select * from auction_products ORDER BY id DESC";
}

// Keeping logic in header http://www.unieauction.com/platinum-demo/users/signup



$res = $db->getAll($query);

$msg = empty($res) ? "No records found":"" ; 

include('header.php');

?>

<h1>Auctions</h1>

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
		<td><img width="150" height="150" src="files/products/<?= $value['image']; ?>" /> </td>
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