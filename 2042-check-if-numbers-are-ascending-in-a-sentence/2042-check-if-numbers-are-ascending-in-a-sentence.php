class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function areNumbersAscending($s) {
        $s = explode(' ', $s);
        $l = count($s);
        $r = false;
        for($i=0; $i<$l;$i++) {
            if (!is_numeric($s[$i])) {
                continue;
            }
            if ($r !== false && $s[$i] <= $r) {
                return false;
            }
            $r = $s[$i];
        }
        unset($s,$i,$s,$l);
        return true;
    }
}