<?php
include('../init.php');

// Keeping logic in header
$sql = "select * from auction_products ORDER BY id DESC";
$res = $db->getAll($sql);
include('header.php');
?>

<table class="table table-striped table-hover">
  <thead>
      <tr>
         
         <th>Name</th>
         <th>Image</th>
         <th>Details</th>
         <th>Current Price</th>
         <th>Bids Placed</th>
         <th>Ending</th>
         <th>Preview</th>
         <th>Edit</th>
         <th>Delete</th>


      </tr>
   </thead>

<tbody>
<?php foreach ($res as $key => $value): ?>
   <tr>
      
      <td><?= $value['name']; ?></td>
      <td>
      <a href="product.php?id=<?= $value['id'] ?>">
        <img width="150" height="150" src="../files/products/<?= $value['image']; ?>" />
       </a>  
    </td>
    <td><?= $value['short_description']; ?></td>
    <td><?= $value['opening_price']; ?></td>
    <td>Bids Placed</td>
    <td><?= (date('Y-m-d H:i:s') > $value['end_date']) ? "Expired" : date("jS F, Y H:i:s", strtotime($value['end_date'])); ?></td>



      <td><a target="_blank" href="../product.php?id=<?= $value['id'] ?>">View</a></td>
      <td><a href="edit_auction.php?productid=<?= $value['id'] ?>">Edit</a></td>
      <td><a href="product.php?id=<?= $value['id'] ?>&action=auction_delete">Delete</a></td>


   </tr>
<?php endforeach ?>
</tbody>
</table>






<?php include('footer.php'); ?>