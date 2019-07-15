<?php
class Post extends Notifier {
    public function validateTo() : bool
    {
        $address = explode(',', $this->to);
        return (count($address) === 2);
    }

    public function sendNotification() : string
    {
        if (!($this->validateTo()))
            throw new Exception("Invalid address.");
        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . ".";
    }
}
?>