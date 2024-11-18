<?php
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
 
    if ($username == null || strlen($username) < 2) {
        echo "Invalid username: cannot be empty or less than 2 characters.";
    } else {
        
        $firstChar = $username[0];
        if (!(($firstChar >= 'A' && $firstChar <= 'Z') || ($firstChar >= 'a' && $firstChar <= 'z'))) {
            echo "Invalid username: must start with a letter.";
        } else {
            $isValid = true;
            for ($i = 0; $i < strlen($username); $i++) {
           
                $char = $username[$i];
 
                if (!((($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z')) || ($char >= '0' && $char <= '9'))) {
                    $isValid = false;
                    echo "Invalid username: contains invalid characters.";
                    break;
                }
            }
 
            
                echo "Valid username: " . $username;
            }
        }
    }
}
 
?>