<?php

 

$conn = mysqli_connect("localhost", "Betty", "makenaimunya@2CMB", "registration");

 

if(isset($_POST['submit']))

{

$product_name = $_POST['product_name'];

$product_price = $_POST['product_price'];

$product_qty = $_POST['product_qty'];

$product_image = $_POST['product_image'];

$product_code = $_POST['product_code'];

 

 

$query = "INSERT INTO menu (product_name, product_price, product_qty, product_image, product_code )VALUES ('$product_name', '$product_price', '$product_qty', '$product_image', '$product_code')";

           $query_run = mysqli_query($conn,$query);

 

           if ($query_run) {

                      echo "SAVED";

                      header('Location : addfood.php');

           }

           else

           {

                      echo "NOT SAVED";

           }

}

?>