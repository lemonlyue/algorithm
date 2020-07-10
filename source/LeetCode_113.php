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

    protected $res = [];
    /**
     * @param TreeNode $root
     * @param Integer $sum
     * @return Integer[][]
     */
    function pathSum($root, $sum) {
        $this->dfs($root, $sum, []);
        return $this->res;
    }

    function dfs($root, $sum, $arr) {
        if ($root->val === null) {
            return [];
        }
        $arr[] = $root->val;
        if ($root->left === null && $root->right === null) {
            if ($sum === $root->val) {
                $this->res[] = $arr;
                return $this->res;
            }
            return [];
        }
        $sum -= $root->val;
        $this->dfs($root->left, $sum, $arr);
        $this->dfs($root->right, $sum, $arr);
    }
}