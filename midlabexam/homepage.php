<?php
session_start();
if(!(isset($_SESSTON["stATUS]")))
                                 {
                                  header("location:login.html");
								 }
?>								  
			
			
			
			
			
<html>
    <head>
              <title>Homepage</title>
    </head> 
	<body>
        <?php echo "Hi!  {$_SESSION["username"]}" ?>
        <p><b>Welcome to the homepage!</b></p>
        <a href ="logout.php">Log Out</a>
    </body>
</html>