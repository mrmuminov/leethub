class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
      $arr=[];
      for ($i=0;$i<$n;$i++) {
        $arr[$i]=$nums[$i];
        $ni = $n + $i;
        $arr[$ni]=$nums[$ni];
      }

      return $arr;
    }
}