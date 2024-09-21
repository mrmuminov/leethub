class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $all = [];
        $max = max($candies);
        foreach($candies as $candy) {
            $all[]= $candy+$extraCandies >= $max;
        }
        return $all;
    }
}