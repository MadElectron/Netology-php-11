<?php

namespace ProductTypes;
use \Base\Product as Product;

class Pencil extends Product
{
    private $color = [127, 127, 127];

    public function __construct($title, $price, array $color) {
        parent::__construct($title, $price, $discount = 10);

        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}