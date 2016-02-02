<?php
/**
 * Rental（レンタル）クラスは、顧客がビデオを借りたことを表現する。
 */
class Rental
{
    private $_movie;
    private $_daysRented;

    public function __construct($movie, $daysRented)
    {
        $this->_movie = $movie;
        $this->_daysRented = $daysRented;
    }

    public function getDaysRented()
    {
        return $this->_daysRented;
    }

    public function getMovie()
    {
        return $this->_movie;
    }
}
