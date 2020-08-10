<?php
if(isset($_POST['submit']))
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="user";
    $username = $_POST['id'];
    $password = $_POST['password'];
   
    $conn= mysqli_connect($host,$user,$pass,$db);
    
    $result = mysqli_query($conn,"select * from user where id ='$username' and Password ='$password'");
    
    $rows = mysqli_num_rows($result);
   // echo $rows;
    $data = mysqli_fetch_assoc($result);
    if(!empty($rows))
    {
        session_start();
        $_SESSION['user']='true';
        $_SESSION['id']= $data['id'];
        $_SESSION['User_Type'] = $data['User_Type'];
        $_SESSION['Name']= $data['Name'];

        
        
    
        echo"Correct ID and password";
       if($_SESSION['User_Type'] == 'User'){
        
        header("refresh:1; url=user.php");
        }
        else
        {
            header("refresh:1; url=admin.php");
        }
        
    }
    else{
        echo"User Name or Password is Wrong ";
        header("refresh:2; url=log.html");

    }
    
}
?>