class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function smallestEvenMultiple($n) {
        return $n%2===0 ? $n : $n*2;
    }
}