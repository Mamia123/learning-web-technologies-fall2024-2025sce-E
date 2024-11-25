<?php
session_start();
if(isset($_post["submit"])){
	                        $login_name = $_POST["name"];
                            $login_password = $_POST["password"];
		if(empty($login_name) || empty($login_password)){ 
                                                        	echo "Username or password can not be empty";
                                                        }	
     		else if(( isset($_SESSION["username"]) && isset($_SESSION["password"]) && $login_name === $_SESSION["username"]) && ($login_password === $_SESSION["password"])){  
                     			    $_SESSION["status"] = true;
                                   header("location: home.php");}
				    else{
                            echo "username and password is not valid";}
                               }
                             else{
                                   header("location:login.html");}

?>