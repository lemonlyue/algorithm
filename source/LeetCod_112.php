<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $sum
     * @return Boolean
     */
    function hasPathSum($root, $sum) {
        return $this->dfs($root, $sum);
    }

    function dfs($root, $sum) {
        if ($root->val === null) {
            return false;
        }
        if ($root->left === null && $root->right === null) {
            return $sum === $root->val;
        }
        $sum -= $root->val;
        return $this->dfs($root->left, $sum) || $this->dfs($root->right, $sum);
    }
}