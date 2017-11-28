<?php 

namespace Base;
use \Base\Product as Product;

class Cart
{
    protected $products = [];
    protected $customer;

    public function __construct($customer = null)
    {
        $this->customer = $customer;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function add(Product $product)
    {
        // @TODO: throw exception if no price
        $this->products[] = $product;

        return $this;
    }

    public function remove($id)
    {
        // @TODO: throw exception if no product
        unset($this->products[$id]);

        return $this;
    }

    public function getTotal()
    {
        if (empty($this->products)) {
            return 0;
        }
        else {
            $total = 0;
            foreach($this->products as $product)
            {   
                $total += $product->getPrice();
            }

            return $total;
        }
    }

    public function __toString()
    {
        if (empty($this->products)) {
            return 'Корзина пуста'.PHP_EOL;
        }
        else {
            $result = PHP_EOL;
            foreach ($this->products as $id => $product) {
                $result .= "$id: {$product->getTitle()}".PHP_EOL;
            }    

            return $result;
        }
    }
}