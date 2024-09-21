class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $fk => $f) {
            foreach($nums as $sk => $s) {
                if ($fk != $sk && $target == $f+$s) {
                  return [$fk, $sk];
                }
            }
        }
    }
}