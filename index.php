<?php
include('init.php');


// Keeping logic in header http://www.unieauction.com/platinum-demo/users/signup
$query = "select * from products";
$res = $db->getAll($query);

include('header.php');

?>

<h1>Lists</h1>

<table class="table table-striped table-hover">
  <tr>
  	<td>#</td>
  	<td>Start Date</td>
  	<td>End Date</td>
  	<td>Mins Remaining</td>
  	<td>Details</td>
  	
  </tr>

<?php

foreach ($res as $key => $value) {

	$remMin = round(($value['ending_at'] - time()) / 60);

	$remSeconds = round(($value['ending_at'] - time()));
	$id = $value['id'];

	echo "<tr>";	
	echo "<td>".$value['id']."</td>";
	echo "<td>"  . $value['title'] . "</td>";
	echo "<td>"  . $common->englishDate($value['ending_at']). "</td>";

	if($remSeconds > 0){

	echo "<td data-sec='$remSeconds' class='seconds_timer'> Min: $remMin  Seconds: <span class='sec-span'>$remSeconds</span>  </td>";

	}else{
		echo "<td> Expired  </td>";	
	}

	echo "<td><a href='product.php?id={$id}'>View</a>" . "</td>";

	
	echo "</tr>";

}

?>

</table>


<script type="text/javascript">
/*
var count = 5;

  countdown = setInterval(function(){
    $("p.countdown").html(count + " seconds remaining!");
    count--;    
    if (count == 0) {
      clearInterval(countdown);
    }

}, 1000);

*/

$(window).load(function() {
$(".seconds_timer").each(function() {
 var secs = $(this).attr('data-sec');
 count_down( $(this),secs);

});

function count_down(obj,secs) {
	var secs = secs-1;
	obj.find('.sec-span').html(secs);
	if(secs>0) {
		setTimeout(function() {
		count_down(obj,secs);
	},1000);
	}
	
	//return secs-1;
}
});
</script>

<?php include('footer.php'); ?>