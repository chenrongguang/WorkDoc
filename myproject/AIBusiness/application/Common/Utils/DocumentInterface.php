<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 8:49
 */

namespace app\Common\Utils;

/**
 * 文档生成接口
 * Interface DocumentInterface
 * @package Common\Utils
 */
interface DocumentInterface
{
    /**
     * 文档生成方法的接口定义
     * @Author : ww
     * @param $docData API文档数据
     * @param $systemErrorMessage API错误信息
     * @param $docName API文档名称
     * @return mixed
     */
    public function createDocument($docData, $systemErrorMessage,$docName);
}