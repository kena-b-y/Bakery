<?php
$conn=new mysqli("localhost","Betty","makenaimunya@2CMB","registration");

if(isset($_POST['submit'])){ 
   // echo "<script>alert('Registration Succesful')</script>";
        
        $Id = $_POST['Id'];  
        $email = $_POST['email'];  
        $password= $_POST['password']; 

        
        $add_user="INSERT INTO adminlogin(Id, email, password)
                         VALUES( '$Id', '$email', '$password')"; 
        
                if(mysqli_query($conn,$add_user)){
                     echo "<script>alert('Registration Successful')</script>";  
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>" . $conn->error;
                    }
                    
    }


?>
