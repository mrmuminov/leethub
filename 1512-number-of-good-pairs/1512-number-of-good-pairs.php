class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $r = 0;
        $c = count($nums);
        for ($i=0;$i<$c;$i++) {
            for ($j=0;$j<$i;$j++) {
                if ($nums[$i] == $nums[$j]) $r++;
            }
        }
        return $r;
    }
}