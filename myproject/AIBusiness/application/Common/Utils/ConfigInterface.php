<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 15:46
 */

namespace app\Common\Utils;

/**
 * 配置的接口定义
 * Author: crg
 * Interface ConfigInterface
 * @package Common\Utils
 */
interface ConfigInterface
{
    /**
     * 获取错误码对照配置
     * Author: crg
     * @return mixed
     */
    public function getCodeMsgConfig();

    /**
     * 根据文件路径获取配置
     * Author: crg
     * @param $filePath
     * @return mixed
     */
    public function getConfigWithFilePath($filePath);

    /**
     * 获取配置-参数
     * Author: crg
     * @param $className
     * @return mixed
     */
    public function getParamsConfig($className);

    /**
     * 获取配置-全部
     * Author: crg
     * @param $className
     * @return mixed
     */
    public function getParamsAllConfig($className);
}