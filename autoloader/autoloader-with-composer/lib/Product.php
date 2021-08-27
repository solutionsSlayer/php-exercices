<?php

class Product {
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function sayProduct() {
        return $this->message;
    }
}
