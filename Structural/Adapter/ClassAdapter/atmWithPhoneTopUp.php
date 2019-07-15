<?php
class ATMWithPhoneTopUp extends ATM {
    public function getTopUp(float $amount, int $time) : string {
        if($this->reduceBalance($amount))
            return $this->generateTopUpCode($amount, $time);
        throw new Exception("Couldn't withdraw money.");
    }
    private function generateTopUpCode(float $amount, int $time) : string {
        return $amount.$time.rand(0, 10000);
    }
}
?>