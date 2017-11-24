<?php
/**
 * Created by PhpStorm.
 * User: crg
 * Date: 2016/9/22
 * Time: 10:48
 */

namespace app\Common\Utils;

/**
 * 示例接口的定义
 * User: crg
 * Interface DemoInterface
 * @package Common\Utils
 */
interface DemoInterface
{

    /**
     * 根据yaml解析的对象获取示例数据
     * User: crg
     * @param $obj
     * @return mixed
     */
    public function getDataByYamlObj($obj);
}