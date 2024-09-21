class Solution {
    function maxSubsequence($nums, $k) {
        $arr= $nums;
        sort($arr);
        $rr = array_slice($arr, -1*$k);
        $arr = [];
        $flag = true;
        foreach ($rr as $r){
            foreach ($nums as $s => $num){
                if ($r === $num){
                    $arr[$s] = $num;
                unset($nums[$s]);
                    break;
                }
            }
        }
        unset($nums, $k, $r, $rr, $num);
        ksort($arr);
        return array_values($arr);
    }
}