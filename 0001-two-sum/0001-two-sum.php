class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $x => $r) {
            foreach($nums as $k => $c){
                if ($x==$k) continue;
                if ($r+$c == $target) {
                    if ($x > $k)  $result = [$k,$x];
                    else $result = [$x, $k];
                    break;
                }
            }
        }
        return $result;
    }
}