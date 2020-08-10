<?php session_start(); ?>

		
           



<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><?php 
    $host="localhost";
    $user="root";
    $pass="";
    $db="user";
  $conn= mysqli_connect($host,$user,$pass,$db);
 $result = mysqli_query($conn,"select id,Name,Email,User_Type from user where id='" . $_SESSION['id'] . "' ");

$row = mysqli_fetch_array($result);
echo $row['id'];

?>
     </td>
				<td rowspan="7" align="center">
                    <br/>
                    
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php 
                    
echo $row['Name'];
   

?>
     </td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php 
	
    echo $row['Email'];

?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>User Type</td>
				<td>: </td>
				<td><?php 

		
        echo $row['User_Type'];
       
?>
     </td>
                
			</tr>
            </table>
            
          <?php 
            mysqli_close($conn);
            //session_destroy(); 
        ?>
            
			
        <hr/>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="admin.php">Go Home</a>	
	</form>
</fieldset>