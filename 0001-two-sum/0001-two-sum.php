class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [];
        foreach($nums as $x => $rows) {
            foreach($nums as $k => $cols){
                if ($x==$k){
                    continue;
                }
                if ($rows+$cols == $target) {
                    if ($x > $k) $result = [$k, $x];
                    else  $result = [$x, $k];
                    break;
                }
            }
        }
        return $result;
    }
}