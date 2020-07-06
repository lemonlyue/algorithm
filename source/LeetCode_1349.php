<?php

/**
 * @desc LeetCode - 1349 旅行终点站
 * @author lemon_lyue
 * @date 2020/07/06
 */
class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {
        $start = [];
        $end = [];
        // 拆分为两个数组,获取起点和终点
        foreach ($paths as $item) {
            $start[] = $item[0];
            $end[] = $item[1];
        }

        /**
         * @desc PHP内置获取数组某一列
         */
        // $start = array_column($paths, 0);
        // $end = array_column($paths, 1);

        foreach ($end as $item) {
            // 判断终点是否存在于起点,存在则不是最终的终点
            if (!in_array($item, $start)) {
                return $item;
            }
        }
    }
}