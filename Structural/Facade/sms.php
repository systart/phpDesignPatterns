<?php
namespace FacadePattern;

class SMS {
    private $from;

    public function __construct(string $from) {
        $this->from = $from;
    }

    public function send(string $to, string $message) : bool {
        if(empty($to) || (strlen($message) === 0))
            return false;
        echo $to . " received message: " . $message."\n";
        return true;
    }
}
?>