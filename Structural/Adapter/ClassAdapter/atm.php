<?php
class ATM {
    private $balance;

    public function __construct(float $balance) {
        $this->balance = $balance;
    }

    public function withdraw(float $amount) : float {
        if($this->reduceBalance($amount))
            return $amount;
        throw new Exception("Couldn't withdraw money.");
    }

    public function reduceBalance(float $amount) : bool {
        if ($amount > $this->balance)
            return false;
        $this->balance -= $amount;
        return true;
    }

    public function getBalance() : float {
        return $this->balance;
    }
}
?>