<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lianghao
 * Date: 2017-08-30
 * Time: 14:26
 * 用户-模型类
 */

namespace app\Common\Model\Platform;

use think\Config;
use think\Model;

class UserGroup extends Base
{

    /**
     * 查询菜单分组
     */
    public function get_grouplist($groups_id)
    {
        $groups = $this->where(['id' => ['in', $groups_id], 'status' => "1"])->order("sort asc,id asc")->field('id,name,icon')->select();
        return $groups;
    }


}