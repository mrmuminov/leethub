class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $i1 = $m - 1;
        $i2 = $n - 1;
        $p = $m + $n - 1;

        while ($i2 >= 0) {
            if ($i1 >= 0 && $nums1[$i1] > $nums2[$i2]) {
                $nums1[$p] = $nums1[$i1];
                $i1--;
            } else {
                $nums1[$p] = $nums2[$i2];
                $i2--;
            }
            $p--;
        }
    }
}
