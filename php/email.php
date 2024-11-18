<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
   
    if (empty($email)) {
        $emailErr = "Email is required.";
    } else {
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }
 
    if (empty($emailErr)) {
        echo "<p>Email is valid: $email</p>";
    }
}
?>