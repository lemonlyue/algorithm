<?php
class Solution {

    /**
     * @param Integer $shorter
     * @param Integer $longer
     * @param Integer $k
     * @return Integer[]
     */
    function divingBoard($shorter, $longer, $k) {
        /**
         * @desc k为0时
         */
        if ($k === 0) {
            return [];
        }
        /**
         * shorter、longer长度相同时
         */
        if ($shorter === $longer) {
            return [$shorter * $k];
        }
        $arr = [];
        for ($i = 0; $i <= $k; $i++) {
            $num = $shorter * ($k - $i) + $longer * $i;
            $arr[] = $num;
        }
        return $arr;
    }
}