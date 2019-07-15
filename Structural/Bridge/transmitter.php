<?php
namespace BridgePattern;

interface Transmitter {
    public function setSender(Messenger $sender);
    public function send($body);
}
?>