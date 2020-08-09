<?php
 $conn = mysqli_connect('127.0.0.1', 'root', '','user');
	$result = mysqli_query($conn, 'select * from users');
if(!$conn)
{
    
}
if(!mysqli_select_db($conn,'user'))
{
    echo"Database is not created !!!!";
}
$Name = $_POST['name'];
$Email = $_POST['email'];
$id = $_POST['id'];
$Password = $_POST['password'];

$User_Type = $_POST['userType'];
$alphats = array_merge(range('A', 'Z'), range('a', 'z'),array('.','/'));


if(strlen($Name)==null || strlen($Name)<2 || is_numeric($Name[0])==true)
{
    echo"Error Check Name";
    echo "<br>";

}
if(empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL))
{
    echo"Enter Valid Email";
    echo "<br>";

}

if(empty($id))
{
    echo"User name should be";
    echo "<br>";

}


if(empty($User_Type))
{
    echo"User type must be selected";
    echo "<br>";

}

else{
$sql = "INSERT into user (id,Name,Email,User_Type,Password) VALUES ('$id','$Name','$Email','$User_Type','$Password')";
    //echo"Submitted";
}


if(!mysqli_query($conn,$sql))
{
    echo"Not inserted";
}
else
{
    echo"Inserted";
}
header("refresh:2; url=log.html");

?>