<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-29
 * Time: 14:26
 * 基类
 */

namespace app\gdr\controller;

use app\gdr\controller\Base;
use Think\Controller;

class Index extends Base
{
    /**
     * 页面
     */
    public function index()
    {
        return $this->fetch();
    }

}