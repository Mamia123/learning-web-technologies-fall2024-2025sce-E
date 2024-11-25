<?php

session_start();

if(isset($_POST["submit"]))
{

    $flag1 = false;
    $flag2 = false;
    $flag3 = false;

$name = $_POST["name"];

$condition_d = "oajdrebksmnbdfrtjanodkpeuerefdghjkiiroemegyjwomojhynzmoo.- ";
$check = true;

for ( $i = 0; $i < strlen($name); $i++){
    for ($j = 0; $j < strlen($condition_d); $j++){
        if($name[$i] == $condition_d[$j]){
            $check = true;
            break;
        }
        else{
            $check = false;
        }
    }
    if($check == false){
        break;
    }
}


if (empty($name)){
    echo "Your username can not be empty";
}
else if((strpos($name, " ") == false)){
    echo "Username must contains at least two words";
}
else if(is_numeric($name[0])){
    echo "Username must statrt with a letter";
}
else if($check == false){
    echo "Username can only contain a-z, A-Z, period , dash ";
}
else{
    $flag1= true;
}


$email = $_POST["email"];

$check = strpos($email , ".com");

echo "<br>";

if(empty($email)){
    echo"Email can't be empty";
}

else if($check == null){
    echo" Invalid email!";
}
else{
    $flag2 = true;
}

echo "<br>";
$password = $_POST["password"];
$confirm_pass = $_POST["con_password"];
if(!($password === $confirm_pass)){
echo "Password does not matched! Pleaase try again.";
}
else if(empty($confirm_pass) || empty($password)){
 echo "password field can not be empty";
}
else{
    $flag3 = true;
}


if($flag1 && $flag2 && $flag3){
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $password;
    header("location:login.html");
}

}
else{
    header("location:registration.html");
}

?>
