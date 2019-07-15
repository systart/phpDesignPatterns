<?php
require_once("atm.php");
require_once("atmWithPhoneTopUp.php");

$atm = new ATM(500.00);
$atm->withdraw(50);
echo $atm->getBalance();
echo "\n";

$adaptedATM = new ATMWithPhoneTopUp(500.00);
echo "Top-up code: " . $adaptedATM->getTopUp(50, time());
echo "\n";
echo $adaptedATM->getBalance()."\n";
?>