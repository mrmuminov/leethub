class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $jewels = str_split($jewels);
        $r = 0;
        foreach (count_chars($stones, 1) as $i => $stoneCount) {
            // chr($i)
            if (in_array(chr($i), $jewels)) $r+=$stoneCount;
        }
        return $r;
    }

}