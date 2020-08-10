<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Management System</title>
</head>
<body>
   
		<fieldset>
			
           
		
		<table>
			<tr>
				<td>Welcome to User Home Page  </td>
				
			</tr>
            <tr>
                <td>
                    <fieldset>
                        <h1>Welcome  <?php 
                            echo($_SESSION['Name']);
                            
                            ?>
                            !
                        </h1>
                        <a href="profileuser.php"> View Profile</a> <br>
                         <a href="changepassworduser.html"> Change Password</a> <br>
                         <a href="Logout.php"> Logout</a> 
                          
</fieldset>
                </td>
            </tr>
			
			<tr>
				<td><footer> Copyright &copy; 2020</footer>
</td>
				
			</tr>
            </table>
    </fieldset>
    </body>
</html>