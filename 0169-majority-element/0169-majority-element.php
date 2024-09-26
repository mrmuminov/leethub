class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $map = [];
        foreach ($nums as $num) {
            $map[$num]++;
        }
        return array_search(max($map), $map);
    }
}