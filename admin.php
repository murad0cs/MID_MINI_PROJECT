<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
   
		<fieldset>
			
           
		
		<table>
			<tr>
				<td>Welcome to Admin Home Page  </td>
				
			</tr>
            <tr>
                <td>
                    <fieldset>
                        <h1>Welcome  <?php 
                            echo($_SESSION['Name']);
                            
                            ?>
                            !
                            <br>
                            
                        </h1>
                         <a href="profileadmin.php"> View Profile</a> <br>
                        
                         <a href="changepasswordadmin.html"> Change Password</a> <br>
                         <a href="Logout.php"> Logout</a> <br>
                          <a href="users.php"> View Users</a>

                          
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