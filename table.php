<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table</title>
</head>
<body>
<a href="addfood.php"> add</a>
</body>
</html>
<?php
require_once 'connect.php';

$sql = "SELECT * FROM menu";
$results = mysqli_query($conn,$sql);
$number_of_results = mysqli_num_rows($results);


if($results->num_rows > 0)
{
     echo "<table border='2px' cellpadding='6px'>";
     echo "<tr>";
     echo "<td>"; echo "id"; echo "</td>";
     echo "<td>"; echo "product_name"; echo "</td>";
     echo "<td>"; echo "product_price"; echo "</td>";
     echo "<td>"; echo "product_qty"; echo "</td>";
     echo "<td>"; echo "product_image"; echo "</td>";
     echo "<td>"; echo "product_code"; echo "</td>";
     echo "</tr>";


     while($row = $results->fetch_assoc())
     {
          $rows[] = $row;
          echo "<tr>";
          echo "<td>"; echo $row['id']; echo "</td>";
          echo "<td>"; echo $row['product_name']; echo "</td>";
          echo "<td>"; echo $row['product_price']; echo "</td>";
          echo "<td>"; echo $row['product_qty']; echo "</td>";
          echo "<td>"; echo $row['product_image']; echo "</td>";
          echo "<td>"; echo $row['product_code']; echo "</td>";
          echo "<td>";
          echo "<div  class='btn-group'>";
		  echo "<a class='btn btn-primary'href='./editfood.php?GETID=" .$row['product_code'] ."'>Edit </a>";
		  echo "<a class='btn btn-warning'href=''>Delete </a>";
		  echo"</div>";
		  echo "</td>";
          echo "</tr>";
    }

    echo "</table>";
}

while($row = mysqli_fetch_array($results)){
    echo $row['id'].'  '.$row['product_name'].'  '.$row['product_price'].' '.$row['product_qty'].' '.$row['product_image'].' '.$row['product_code'].'<br>';
}

?>