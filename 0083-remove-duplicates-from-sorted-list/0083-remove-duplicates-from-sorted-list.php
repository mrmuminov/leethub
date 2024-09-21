/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $map = new ListNode($head->val);
        $cur = $map;
        while (isset($head)) {
            $val = $head->val;
            $head = $head->next;
            if ($cur->val == $val) {
                continue;
            }
            $cur->next = new ListNode($val);
            $cur = $cur->next;
        }
        return $map;
    }
}