class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $s = [];
        $i = 0;
        foreach($nums as $num) {
            $s[] = $i+=$num;
        }
        unset($i, $nums, $num);
        return $s;
    }
}