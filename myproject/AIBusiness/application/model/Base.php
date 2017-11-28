<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/10/19
 * Time: 14:11
 */
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-27
 * Time: 14:26
 * 系统功能-模型类
 */

namespace app\model;
use think\Model;

class Base extends Model{

    public function _initialize()
    {
    }

    public function addData($data)
    {
        $this->data($data);
        return $this->save();
    }

    public function updateData($where, $data)
    {
        $r = $this->where($where)->update($data);
        return $r;
    }

    public function getSingle($where)
    {
        $r = $this->where($where)->find();
        return $r;
    }

    public function getList($where, $field = "*", $orderby = "create time asc", $start = 0, $end = 1000000)
    {
        if ($field == "*") {
            $info = $this
                ->where($where)
                ->order($orderby)
                ->limit($start, $end)
                ->select();
        } else {
            $info = $this->field($field)
                ->where($where)
                ->order($orderby)
                ->limit($start, $end)
                ->select();
        }

        return $info;
    }


}