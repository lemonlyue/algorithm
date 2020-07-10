<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $arr = [];
        for ($i=0;$i<$n;$i++) {
            $arr[] = $nums[$i];
            $arr[] = $nums[$n + $i];
        }
        return $arr;
    }
}