<?php
require_once("connect.php");
if(isset($_POST["submit"]))
{
 if (empty($_POST["Id"]) || empty($_POST["email"]) || empty($_POST["password"]) )
   {
     header("location:admin_login.html");
    exit();
   }

 else{

    $sql = "SELECT * FROM adminlogin WHERE Id= '".$_POST['Id']."', email = '".$_POST['email']."' and password = '".$_POST['password']."'";
    $result=$conn->query($sql);

    if ($results->num_rows) {
    	session_start();
    	header ("location:Admin.php");
        echo "Login successful";
    }
     else {
        echo "Invalid credentials";
    }

  }
}
?>
