<?php 

namespace Base;

use \Base\Cart as Cart;

class Order
{
    const STATUSES = ['Принят', 'Оформлен', 'Выполен', 'Отказ'];

    protected static $incrementor = 0;    

    protected $id;
    protected $cart;
    protected $status = 0;


    public function __construct(Cart $cart)
    {
        // @TODO: throw exception
        $this->id = 'ORD'.(1000000 + ++self::$incrementor);

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCart()
    {
        return $this->Cart;   
    }

    public function __toString()
    {
        $result = PHP_EOL.'Заказ '.$this->getId();
        foreach ($this->getCart()->getProducts() as $id => $product) {
            $result .= "$id: {$product->getTitle()}: {$product->getPrice()} р.".PHP_EOL;
        }    

        return $result;
    }
}