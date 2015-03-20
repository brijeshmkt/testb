<?php
include('../init.php');



if(isset($_POST['addCategorySubmit']) && !isset($_POST['inputCategoryId'])){
	
	$category = $_POST['inputAddCategory'];

	$sql = "INSERT INTO auction_categories (`category`) VALUES('{$category}')";

	$result = mysql_query($sql);
	
	if($result){
		echo "$category category added";
	}else{
		echo $sql;
	}
}

if(isset($_POST['deletecategory'])){

	$catid = $_POST['id'];
	
	$sql = "DELETE FROM auction_categories WHERE id={$catid}";

	$result = mysql_query($sql);
	
	if($result){
		echo "category Deleted";
	}else{
		echo $sql;
	}

}

if(isset($_POST['inputCategoryId'])){

	$catid = $_POST['id'];

	$category = $_POST['inputAddCategory'];
	
	$sql = "UPDATE auction_categories SET category = {$category} WHERE id={$catid}";

	$result = mysql_query($sql);
	
	if($result){
		echo "category Updated";
	}else{
		echo $sql;
	}

}



?>