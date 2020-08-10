<?php
	
	setcookie('status', "OK", time()-60, '/');
    session_start();
     session_destroy();
    
     header('location: log.html');
    
	
?>