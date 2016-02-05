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
        $result = 'Rental Record for '.$this->getName().'¥n';

        foreach ($this->_rentals as $rental) {
            $thisAmount = 0;
            $thisAmount = $this->amountFor($rental);

            // レンタルポイントを加算
            ++$frequentRenterPoints;
            // 新作を二日以上借りた場合はボーナスポイント
            if (($movie->getPriceCode() == $movie::NEW_RELEASE)
            && ($movie->getDaysRented() > 1)) {
                ++$frequentRenterPoints;
            }

            // この貸し出しに関する数値の表示
            $result .= '¥t'.$movie->getTitle().'¥t'.$thisAmount.'¥n';
            $totalAmount += $thisAmount;
        }

        // フッタ部分の追加
        $result .= 'Amount owed is '.$totalAmount.'¥n';
        $result .= 'You earned '.$frequentRenterPoints.' frequent renter points';

        return $result;
    }

    private function amountFor($aRental)
    {
        return $aRental->getCharge();
    }
}
