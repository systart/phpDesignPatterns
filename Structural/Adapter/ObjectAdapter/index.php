<?php
require_once('insurance.php');
require_once('marketCompare.php');
require_once('insuranceMarketCompare.php');
$quote = new Insurance(10000, 250);
echo $quote->monthlyPremium();
echo "\n";
$quote = new InsuranceMarketCompare(10000, 250);
echo $quote->getMonthlyPremium();
echo "\n";
echo $quote->getAnnualPremium()."\n";
?>