class Solution {
    function minimumSum($num) {
        $num = str_split(str_replace('0', '', $num));
        $c = count($num);
        if ($c === 1) return $num[0];
        if ($c === 2) return $num[0] + $num[1];
        sort($num);
        if ($c === 4) return ($num[0] . $num[3]) + ($num[1] . $num[2]);
        return ($num[0] . $num[1]) + ($num[2]);
    }
}