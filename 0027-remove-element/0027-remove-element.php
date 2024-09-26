class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $l = count($nums);
        $b = 0;
        $s = 0;
        for ($i=0;$i<$l;$i++) {
            if ($nums[$i] == $val) {
                unset($nums[$i]);
                continue;
            }
        }
        return count($nums);
    }   
}