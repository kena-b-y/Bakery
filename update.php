<?php
require_once("connect.php");

if(isset($_POST['update']))
{
	$product_code=$_GET['ID'];

$product_name = $_POST['product_name'];

$product_price = $_POST['product_price'];

$product_qty = $_POST['product_qty'];

$product_image = $_POST['product_image'];

$query="UPDATE menu SET product_name='".$product_name."',product_price='".$product_price."',product_qty='".$product_qty."', product_image='".$product_image."' WHERE  product_code='".$product_code."'";

$result=mysqli_query($conn, $query);

if($result)
{
	header("location:table.php");
}
else{
	echo "please check query";
}

}

?>