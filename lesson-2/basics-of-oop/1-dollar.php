<?php

class Currency {

    public static $abc = 4;

    private $price;
    private $country = 6;
    protected $index;
    protected $amount;

    public function __construct()
    {
    }

    public function __call($name, $arguments)
    {
        if(strpos($name, 'get') !== false) {
            $var = strtolower(ltrim($name, ['get']));
            if($this->$var) {
                return $this->$var;
            } else {

            }
        }
        var_dump($name, $arguments);
        die();
    }

    public function __set($name, $value)
    {
        var_dump($name, $value);
        die();
    }

    private function calcPrice() {
        // web call by $index
        $rate = 3000;
       /// $this->price = $this->amount * $rate;
    }


    public function setPrice($price) {
        $this->price = $price;
    }





        /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function printPrivateCountry() {
        var_dump($this->country);
    }
}

class Dollar extends Currency
{
    public $country;
    public function getSomeDate()
    {
        $this->country = 5;
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getIndex1()
    {
//        return $this->price;
    }

}


class Euro extends Currency
{
}

echo Currency::$abc;
//$dollar1 = new Dollar;
//$dollar1->acv = 5;
//
//$dollar1->getIndex();
//var_dump($dollar1->country);
//var_dump($obj1);
