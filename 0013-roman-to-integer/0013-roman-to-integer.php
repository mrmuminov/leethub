class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $s = mb_str_split($s);
        $o = 0;
        $t = 10000;
        $q = [
          'I' => 1,
          'V' => 5,
          'X' => 10,
          'L' => 50,
          'C' => 100,
          'D' => 500,
          'M' => 1000,
        ];
        foreach($s as $v) {
            $v=$q[$v];
            if ($v > $t) {
                $o-= $t;
                $o-= $t;
            }
            $o+= $v;
            $t = $v;
        }
        unset($s, $t, $q);
        return $o;
    }
}