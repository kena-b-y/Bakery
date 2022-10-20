<?php
require_once('signup.php');
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_select = "SELECT email, password FROM register_table WHERE email = '" . $email . "' AND password = '" . $password . "' LIMIT 1";
    $results = $conn->query($sql_select);

    if ($results->num_rows) {
        echo "Login successful";

    }
     else {
        echo "Invalid credentials";
    }
} 


if(isset($_POST["submit"]))
{
 if (empty($_POST["email"]) || empty($_POST["password"]))
   {
     header("location:Register.php");
    exit();
   }


 else{

    $sql = "SELECT * FROM register_table WHERE email= '".$_POST['email']."' and Password = '".$_POST['password']."'";
    $result=$conn->query($sql);

    if($result->fetch_assoc()){
      $_SESSION['User']=$_POST['email'];
      header("location:bakery.html?");
    }
    else{
      header("location:Register.php");
    }
  }
}

?>
