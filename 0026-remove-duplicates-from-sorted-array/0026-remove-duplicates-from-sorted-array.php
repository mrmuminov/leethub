class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $l = $s = count($nums);
        $n = false;
        for ($i=0;$i<$l;$i++) {
            if ($n !== $nums[$i]) {
                $n = $nums[$i];
                --$s;
            } else {
                unset($nums[$i]);
            }
        }
        
        return count($nums);
    }
}