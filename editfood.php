<?php
require_once("connect.php");
$product_code=$_GET['GETID'];
$query="select * from menu where product_code='".$product_code."'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
  $product_name = $row['product_name'];

$product_price = $row['product_price'];

$product_qty = $row['product_qty'];

$product_image = $row['product_image'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Food</title>
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">

<div class="main">
        <div class="card">
            <div class="cardtitle">
                <h3><i class="fa fa-user-circle"></i>User <span id="actiontitle">Editfood</span></h3>
            </div>
            <div class="cardbody">
                <div class="cardbodytop">
                    <button id="addfood" class="button" onclick="addfoodbutton()">Editfood</button>
                    <div id="bottomline"></div>
                </div>
                <div class="cardbodybottom">

                    <form action="update.php?ID=<?php echo $product_code ?>" method="POST">
                        <br>
                        <input type="text" name="product_name" class="input-field" required="" placeholder="Enter product name" value="<?php echo $product_name ?>" ><br><br>
                        <input type="text" name="product_price" class="input-field" required="" placeholder="Enter product price" value="<?php echo $product_price ?>" ><br><br>
                        <input type="text" name="product_qty" class="input-field" required="" placeholder="Enter product quantity" value="<?php echo $product_qty ?>"><br><br>
                        <input type="file" name="product_image" class="input-field" placeholder="BROWSE IMAGE" value="<?php echo $product_image ?>">
                        <br>
                        <input type="submit" name="update" class="submit-field" value="update" >
                    </form>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</head>
    <body>
        
    </body>
    </html>
