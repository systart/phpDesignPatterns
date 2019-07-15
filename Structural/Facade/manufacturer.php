<?php
namespace FacadePattern;

class Manufacturer {
    private $capacity;

    public function __construct(int $capacity) {
        $this->capacity = $capacity;
    }

    public function build() : string {
        return uniqid();
    }
}
?>