class Solution {
    function defangIPaddr(string $address): string
    {
        $length = mb_strlen($address);
        $result = '';
        for ($i = 0; $i < $length; ++$i) {
            $result.= $address[$i] === '.' ? '[.]' : $address[$i];
        }
        return $result;
    }
}