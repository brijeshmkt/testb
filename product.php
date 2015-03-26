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
		<p>Ending On <strong class="text-danger"><?= $product['end_date'];  ?> </strong></p>

		<h2>Expiring Soon...</h2>
		<p id="enddate"></p>

		<p>Buy Now Price: <?= $product['buy_now_price']; ?></p>
	</div>

</div>


<div class="row">
	<?= $product['description'];  ?>
</div>

<script type="text/javascript">
$( document ).ready(function() {
	console.log('timer');

	// Split timestamp into [ Y, M, D, h, m, s ]
var t = "<?= $product['end_date'];  ?>".split(/[- :]/);

// Apply each element to the Date function
var expires = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);




	//var expires = new Date();

	$('#enddate').countdown({
		until: expires,
		datetimeFormat: 'D/O/Y H:Ma',
		onExpiry: liftOff,
	});

function liftOff() { 
    alert('Time is up!'); 
} 

});	

</script>

<?php include('footer.php'); ?>