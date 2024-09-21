class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $i = true;
        while($i) {
            if (strpos($s, '[]') === false && strpos($s, '()') === false && strpos($s, '{}') === false) {
                $i = false;
            } else {
                $s = str_replace(['[]', '{}', '()'], '', $s);
            }
        }
        return strlen($s) === 0;
    }
}