<?php
require_once('notifier.php');
require_once('notifierFactory.php');
require_once('electronicNotifierFactory.php');
require_once('courierNotifierFactory.php');
require_once('sms.php');
require_once('email.php');
require_once('post.php');

$mobile = ElectronicNotifierFactory::getNotifier("Sms", "07111111111");
echo $mobile->sendNotification()."\n";
$email = ElectronicNotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification()."\n";
$post = CourierNotifierFactory::getNotifier("Post", "10 Downing Street, SW1A 2AA");
echo $post->sendNotification()."\n";
?>