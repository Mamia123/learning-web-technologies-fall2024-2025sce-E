<?php
$amount = 100; 
$vatRate = 0.15; 


         $vat = $amount * $vatRate;


         $totalAmount = $amount + $vat;

echo "Amount: $" . number_format($amount, 2) . "<br>";
echo "VAT (15%): $" . number_format($vat, 2) . "<br>";
echo "Total Amount with VAT: $" . number_format($totalAmount, 2) . "<br>";
?>