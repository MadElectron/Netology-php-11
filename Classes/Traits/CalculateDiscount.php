<?php

namespace Traits;

trait CalculateDiscount
{
    public function calculateDiscount($baseDiscount)
    {
        return ($this->weight > 10) ? $baseDiscount : 0;
    }
}