<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Food</title>
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">

<div class="main">
        <div class="card">
            <div class="cardtitle">
                <h3><i class="fa fa-user-circle"></i>User <span id="actiontitle">Addfood</span></h3>
            </div>
            <div class="cardbody">
                <div class="cardbodytop">
                    <button id="addfood" class="button" onclick="addfoodbutton()">Addfood</button>
                    <div id="bottomline"></div>
                </div>
                <div class="cardbodybottom">

                    <form action="sth.php" method="POST">
                        <br>
                        <input type="text" name="product_name" class="input-field" required="" placeholder="Enter product name"  ><br><br>
                        <input type="text" name="product_price" class="input-field" required="" placeholder="Enter product price"  ><br><br>
                        <input type="text" name="product_qty" class="input-field" required="" placeholder="Enter product quantity" ><br><br>
                        <input type="file" name="product_image" class="input-field" placeholder="BROWSE IMAGE" >
                        <input type="text" name="product_code" class="input-field" required="" placeholder="Enter product code" ><br><br>
                        <br>
                        <input type="submit" name="submit" class="submit-field" value="Add" >
                        <button class="btn btn-info"><a href = "table.php">Return to Menu Page</a></button>

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




