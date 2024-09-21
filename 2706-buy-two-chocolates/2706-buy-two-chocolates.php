class Solution {

    /**
     * @param Integer[] $prices
     * @param Integer $money
     * @return Integer
     */
    function buyChoco($prices, $money) {
        $m1 = 101;
        $m2 = 101;
        foreach($prices as $price) {
            if ($price < $m1) {
                $m2 = $m1;
                $m1 = $price;
            } else if ($price < $m2) {
                $m2 = $price;
            }
        }
        $m1 = $money - ($m1 + $m2);
        unset($m2, $prices);
        return $m1 < 0 ? $money : $m1;
    }
}