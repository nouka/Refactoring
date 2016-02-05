<?php
/**
 * Movie（映画）は単なるデータ保持用クラス.
 */
class Movie
{
    const CHILDRENS = 2;
    const REGULER = 0;
    const NEW_RELEASE = 1;

    private $_title;
    private $_priceCode;

    public function __construct($title, $priceCode)
    {
        $this->_title = $title;
        $this->_priceCode = $priceCode;
    }

    public function getPriceCode()
    {
        return $this->_priceCode;
    }

    public function setPriceCode($arg)
    {
        $this->_priceCode = $arg;

        return $this;
    }

    public function getTitle()
    {
        return $this->_title;
    }
}
