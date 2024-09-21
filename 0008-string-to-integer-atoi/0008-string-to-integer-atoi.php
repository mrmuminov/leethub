class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $s = str_replace("e", "A", $s);
        $s = (int)$s;
        if ($s < -2147483648)
            return -2147483648;
        if ($s > 2147483647)
            return 2147483647;
        return $s;
    }
}