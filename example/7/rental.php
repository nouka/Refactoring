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

    public function getCharge()
    {
        $result = 0;
        $movie = $this->getMovie();

        // 1行ごとに金額を計算
        switch ($movie->getPriceCode()) {
            case $movie::REGULER:
                $result += 2;
                if ($this->getDaysRented() > 2) {
                    $result += ($this->getDaysRented() - 2) * 1.5;
                }
                break;
            case $movie::NEW_RELEASE:
                $result += $this->getDaysRented() * 3;
                break;
            case $movie::CHILDRENS:
                $result += 1.5;
                if ($this->getDaysRented() > 3) {
                    $result += ($this->getDaysRented() - 3) * 1.5;
                }
                break;
        }

        return $result;
    }

    public function getFrequentRenterPoints()
    {
        $movie = $this->getMovie();
        if (($movie->getPriceCode() == $movie::NEW_RELEASE) && ($movie->getDaysRented() > 1)) {
            return 2;
        }

        return 1;
    }
}
