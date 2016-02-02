<?php
/**
 * Customer（顧客）クラスは店で取り扱う顧客を表す。
 * 他のクラスと同様、データとアクセサ（アクセス用メソッド）を持つ。
 */
class Customer
{
    private $_name;
    private $_rentals = array();

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function addRental($arg)
    {
        $this->_rentals[] = $arg;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function statement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $result = "Rental Record for " . $this->getName() . "¥n";
        
    }
}
