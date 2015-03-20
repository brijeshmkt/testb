<?php
include('includes/init.php');


$id = $_GET['id'];
// Keeping logic in header
$query = "select * from products where id = '".$id."' LIMIT 1";
$product = $db->getAll($query);

include('header.php');

?>

<h1>Product Details</h1>

<?php

	print_r($product);

?>

</table>

<p>Counting down to 26 January <span id="year">2014</span>.</p>
<div id="defaultCountdown"></div>

<script>
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
});
</script>



<?php include('footer.php'); ?>