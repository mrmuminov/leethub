class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $l = $s = count($nums);
        $n = false;
        $b = 0;
        for ($i=0;$i<$l;$i++) {
            if ($n !== $nums[$i]) {
                $n = $nums[$i];
                --$s;
                $b = 1;
            } else {
                if ($b === 1) {
                    $b = 2;
                } else {
                    unset($nums[$i]);
                }
            }
        }
        
        return count($nums);
    }
}