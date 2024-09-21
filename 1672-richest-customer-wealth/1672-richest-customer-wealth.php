class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $all = [];
        foreach ($accounts as $account) {
            $all[]= array_sum($account);
        }
        $a = max($all);
        unset($all, $accounts, $account);
        return $a;
    }
}