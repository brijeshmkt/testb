<?php
include('includes/init.php');

if(isset($_POST['submit'])){

print_r($_POST);

$title = $_POST['title'];
$initialprice = $_POST['initialprice'];

//$days = $_POST['days'];
$hours = $_POST['hours'];
//$min = $_POST['min'];

$caltime = (int)$hours * 60 * 60;
$ending_at = $caltime + time();

$sql = "INSERT INTO products(title,initialprice,created_at,ending_at) 

VALUES ('{$title}','{$initialprice}','".time()."' , '{$ending_at}' )";

$result = mysql_query($sql);

}	
?>


<a href="index.php">Home</a>

<form method="post" action="">
	Name: <input type="text" name="title" id="title" /><br>
	Starting Price: <input type="text" name="initialprice" id="initialprice" /><br>
	<!-- Days : <input type="text" name="days" id="days" value="0" /><br> -->
	End in Hours : <input type="text" name="hours" id="hours" value="0" /><br>
	<!-- Mins : <input type="text" name="min" id="min" value="0" /><br> -->

	<input type="submit" name="submit" value="submit">
</form>

</body>
</html>