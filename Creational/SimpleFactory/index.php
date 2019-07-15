<?php
require_once('notifier.php');
require_once('notifierFactory.php');
require_once('sms.php');
$mobile = NotifierFactory::getNotifier("Sms", "07111111111");
echo $mobile->sendNotification()."\n";
require_once('email.php');
$email = NotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification()."\n";
?>