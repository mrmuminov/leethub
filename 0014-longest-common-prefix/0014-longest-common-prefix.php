class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $first = str_split($strs[0]);
        $l = count($first);
        $pref = "";
        $c = null;
        $i = 0;
        for ($i=0;$i<$l;$i++) {
            foreach ($strs as $str) {
                if (!isset($str[$i])) break 2;
                if ($str[$i] !== $first[$i]) break 2;
            }
            $pref.=$str[$i];
        }
        return $pref;
    }
}