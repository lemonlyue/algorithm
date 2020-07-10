<?php


class Solution {

    /**
     * 优化
     * @desc 类似双指针
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $count = count($nums);
        $arr[] = $nums[0];
        for ($i=1;$i<$count;$i++) {
            $arr[] = $arr[$i - 1] + $nums[$i];
        }
        return $arr;
    }


    /**
     * @desc 2个for循环,暴力破解
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum2($nums) {
        $arr = [];
        foreach ($nums as $key => $num) {
            for ($i=$key;$i<=$key;$i++) {
                $add += $nums[$i];
            }
            $arr[] = $add;
        }
        return $arr;
    }
}