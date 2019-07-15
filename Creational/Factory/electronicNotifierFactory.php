<?php
class ElectronicNotifierFactory implements NotifierFactory {
    public static function getNotifier($notifier, $to) {
        if (empty($notifier))
            throw new Exception("No notifier passed.");
        
            switch ($notifier) {
            case 'Sms':
                return new Sms($to);
                break;
            case 'Email':
                return new Email($to, 'Junade');
                break;
            default:
                throw new Exception("Notifier invalid.");
                break;
            }
    }
}
?>