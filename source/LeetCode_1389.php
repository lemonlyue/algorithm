<?php
class Solution {

    /**
     * @desc 递归方法
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    public $arr = [];
    function createTargetArray($nums, $index) {
        foreach ($index as $key => $item) {
            $this->insert($item, $nums[$key]);
        }
        return $this->$arr;
    }

    /**
     * @desc 插入方法, 判断当前数组位置是否有值, 有值则将值往后移, 没有值则插入
     * @param int $index
     * @param int $num
     */
    function insert($index, $num) {
        if (!isset($this->$arr[$index])) {
            $this->$arr[$index] = $num;
        } else {
            $temp = $this->$arr[$index];
            $this->insert($index + 1, $temp);
            $this->$arr[$index] = $num;
        }
    }
}