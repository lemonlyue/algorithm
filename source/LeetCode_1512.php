<?php

class Solution {

    /**
     * 双指针（暴力破解）
     * 时间复杂度O(n^2)
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $count = count($nums);
        $result = 0;
        foreach ($nums as $key => $num) {
            for ($i = $key + 1; $i < $count; $i++) {
                if ($num === $nums[$i]) {
                    $result++;
                }
            }
        }
        
        return $result;
    }


    /**
     * 哈希表
     * 时间复杂度O(n)
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs2($nums) {
        $result = 0;
        $arr = [];

        foreach ($nums as $key => $num) {
            if (!isset($arr[$num])) {
                $arr[$num] = 1;
            } else {
                $arr[$num]++;
            }
        }

        foreach ($arr as $ar) {
            $result += $ar * ($ar - 1) / 2;
        }
        
        return $result;
    }
}