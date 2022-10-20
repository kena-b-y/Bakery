<?php
require_once 'connect.php';


//Verified creation of the register_table in my_project
if(isset($_POST['submit'])){

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql_insert="INSERT INTO register_table(username,email,password)VALUES
('$username','$email','$password')";


    if($conn->query($sql_insert))
        {
            echo "Inserted successfully ";
        }
    else
        {
            echo "Error ".$conn->error;
        }

}

$sql_select="SELECT * FROM register_table";
$results=$conn->query($sql_select);
print_r($results);

$results_per_page = 10;

$sql = "SELECT * FROM register_table";
$results = mysqli_query($conn,$sql);
$number_of_results = mysqli_num_rows($results);


if($results->num_rows > 0)
{
     echo "<table border='2px' cellpadding='6px'>";
     echo "<tr>";
     echo "<td>"; echo "username"; echo "</td>";
     echo "<td>"; echo "email"; echo "</td>";
     echo "<td>"; echo "password"; echo "</td>";
     echo "</tr>";


     while($row = $results->fetch_assoc())
     {
          $rows[] = $row;
          echo "<tr>";
          echo "<td>"; echo $row['username']; echo "</td>";
          echo "<td>"; echo $row['email']; echo "</td>";
          echo "<td>"; echo $row['password']; echo "</td>";
          echo "</tr>";
     }echo "</table>";
}

while($row = mysqli_fetch_array($results)){
    echo $row['username'].'  '.$row['email'].'  '.$row['password'].'<br>';
}


$number_of_pages = ceil($number_of_results/ $results_per_page);

if (!isset($_GET['page'])) {

    $page  = 'signup';
    $page2 = 'Home';
    $page3 = 'Menu View';
    $page4 = 'Contact';
    $page5 = 'aboutus';


}
else{

    $page = $_GET['page'];
}


for ($page=1; $page <= $number_of_pages ; $page++) { 

    echo'<a href="Register.php?page">' .$page. '</a>'.'<br>';
    echo'<a href="bakery.html?page">' .$page2. '</a>'.'<br>';
    echo'<a href="FoodWebPg.html?page">' .$page3. '</a>'.'<br>';
    echo'<a href="contact.html?page">' .$page4. '</a>'.'<br>';
    echo'<a href="aboutus.html?page">' .$page5. '</a>'.'<br>';

}

?>