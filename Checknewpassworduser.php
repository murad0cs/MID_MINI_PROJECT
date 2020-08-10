<?php
session_start();
if(isset($_POST['submit'])){
    
$old = $_POST['password1'];
$new = $_POST['password2'];

$cnew = $_POST['password3'];
    $host="localhost";
    $user="root";
    $pass="";
    $db="user";
    
    $conn= mysqli_connect($host,$user,$pass,$db);

   
$result = mysqli_query($conn,"select Password from user where id = '" . $_SESSION['id'] . "' ");
$num = mysqli_fetch_array($result);
    
if($num>0)
{ 
    if($new == $cnew){
    $con =  mysqli_query($conn, "update user set Password = '$new' where id='" . $_SESSION['id'] . "' ");
     echo ' User Password Updated';
    }
    else
    {
        echo"Please Type Same Password";
    }
    }
    else
    {
     echo 'Password did not matched ';
  
    }
   
    
  }
 else
    {
     echo" Not Inserted";
        
    }


?>