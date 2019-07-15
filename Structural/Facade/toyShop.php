<?php
namespace FacadePattern;

class ToyShop {
    private $courier;
    private $manufacturer;
    private $sms;

    public function __construct(string $factoryAddress, string $contactNumber, int $capacity) {
        $this->courier = new Post($factoryAddress);
        $this->sms = new SMS($contactNumber);
        $this->manufacturer = new Manufacturer($capacity);
    }

    public function processOrder(string $address, string $phone) {
        $item = $this->manufacturer->build();
        $this->courier->dispatch($item, $address);
        $this->sms->send($phone, "Your order has been shipped.");
    }
}
?>