<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $node = null;
        while ($head) {
            $cur = $head;
            $head = $head->next;
            $cur->next = $node;
            $node = $cur;
        }
        return $node;
    }
}