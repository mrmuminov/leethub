class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $x = 0;
        foreach($operations as $o) {
            if ($o === '++X' || $o === 'X++') {
                $x++;
                continue;
            }
            $x--;
        }
        return $x;
    }
}