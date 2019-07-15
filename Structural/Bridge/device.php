<?php
namespace BridgePattern;

abstract class Device implements Transmitter {
    protected $sender;

    public function setSender(Messenger $sender) {
        $this->sender = $sender;
    }
}
?>