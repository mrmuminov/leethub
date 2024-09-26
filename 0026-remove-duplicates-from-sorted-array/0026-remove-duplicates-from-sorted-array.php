class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $l = $s = count($nums);
        $n = false;
        foreach ($nums as $i => $num) {
            if ($n !== $num) {
                $n = $num;
            } else {
                $s--;
                unset($nums[$i]);
            }
        }
        
        return $s;
    }
}