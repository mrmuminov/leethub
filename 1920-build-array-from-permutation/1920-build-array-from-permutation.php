class Solution {
    function buildArray($nums) {
        $ans = [];
        foreach($nums as $k => $v) {
            $ans[$k] = $nums[$v];
        }
        unset($nums, $k, $v);
        return $ans;
    }
}