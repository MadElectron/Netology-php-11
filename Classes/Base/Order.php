<?php 

namespace Base;

use \Base\Cart as Cart;

class Order
{
    protected static $incrementor = 0;    

    protected $id;
    protected $cart;

    public function __construct(Cart $cart)
    {
        // @TODO: throw exception
        $id = 'ORD'.(1000000 + ++self::$incrementor);
    }

    public function getId()
    {
        return $this->getId();
    }
}