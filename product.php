<?php
include('init.php');


$id = $_GET['id'];

// provide table name and id
// do not use table prefix
$product = $db->getOne("products", $id);

include('header.php');

?>

<h1><?= $product['name'];  ?></h1>

<div class="row">

	<div class="col-md-6">
		<img width="320" src="files/products/<?= $product['image']; ?>">
	</div>

	<div class="col-md-6">
		<p><?= $product['short_description'];  ?></p>
		<p>Ending In <strong class="text-danger"><?= $product['end_date'];  ?> </strong></p>
		<p>Buy Now Price: <?= $product['buy_now_price']; ?></p>
	</div>

</div>


<div class="row">
	<?= $product['description'];  ?>
</div>



<?php include('footer.php'); ?>