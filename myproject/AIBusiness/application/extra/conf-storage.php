<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/11/18
 * Time: 16:02
 */

/**
 * 证件编码
 */
return [
    //配置时，前面不带/,后面带/
    'storage_folder' => [
        '000' => 'contract/', //系统默认合同存储
        '001' => 'tmpl/', //系统默认模板存储
        '002' => 'contract_attachment/',//合同附件
        'wsm001' =>	'wsm/', //微神马默认目录
        'wsm002' =>	'wsm/contract/', //微神马合同目录
        'lcapp001'=>'lcapp/',//理财项目
    ]
];