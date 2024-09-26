class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $l = count($nums);
        for ($i=0;$i<$l;$i++) {
            if ($nums[$i] == $val) {
                unset($nums[$i]);
                continue;
            }
        }
        return count($nums);
    }   
}