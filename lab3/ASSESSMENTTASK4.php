<?php

$num1 = 22;
$num2 = 55;
$num3 = 35;

if ($num1 >= $num2 && $num1 >= $num3) 
{
    echo "The largest number is: " . $num1;
} 
elseif ($num2 >= $num1 && $num2 >= $num3) 

{
    echo "The largest number is: " . $num2;
} 
else 
{
    echo "The largest number is: " . $num3;
}
?>