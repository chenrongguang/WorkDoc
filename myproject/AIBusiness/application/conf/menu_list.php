<?php

return [

    //财务系统
    'fms' => [

        //日结表-按资金
        'fms/dayreport/statementfunds' => [
            'category' => 'dayreport',
            'category_name' => '日结表',
            'title' => '按资金',
            'url' => 'fms/dayreport/statementfunds',
            'is_child' => 1,
            'image' => '12.png'
        ],

        //日结表-按资产
        'fms/dayreport/statementassets' => [
            'category' => 'dayreport',
            'category_name' => '日结表',
            'title' => '按资产',
            'url' => 'fms/dayreport/statementassets',
            'is_child' => 1,
            'image' => '12.png'
        ],

        //财务审批-资产端服务费
        'fms/servicecharge/index' => [
            'category' => 'servicecharge',
            'category_name' => '财务审批',
            'title' => '资产端服务费',
            'url' => 'fms/servicecharge/index',
            'is_child' => 1,
            'image' => '13.png'
        ],

        //财务审批-资金端服务费
        'fms/servicecharge/funding' => [
            'category' => 'servicecharge',
            'category_name' => '财务审批',
            'title' => '资金端服务费',
            'url' => 'fms/servicecharge/funding',
            'is_child' => 1,
            'image' => '13.png'
        ],

        //财务审批-服务费发票
        'fms/invoice/index' => [
            'category' => 'servicecharge',
            'category_name' => '财务审批',
            'title' => '服务费发票',
            'url' => 'fms/invoice/index',
            'is_child' => 1,
            'image' => '13.png'
        ],

        //财务审批-利息加本金
        'fms/interestprincipal/index'=> [
            'category' => 'servicecharge',
            'category_name' => '财务审批',
            'title' => '利息加本金',
            'url' => 'fms/interestprincipal/index',
            'is_child' => 1,
            'image' => '13.png'
        ],

        //财务审批-过账款
        'fms/posting/index'=> [
            'category' => 'servicecharge',
            'category_name' => '财务审批',
            'title' => '过账款',
            'url' => 'fms/posting/index',
            'is_child' => 1,
            'image' => '13.png'
        ],

        //财务审批-培训费
        'fms/training/index'=> [
            'category' => 'servicecharge',
            'category_name' => '财务审批',
            'title' => '培训费',
            'url' => 'fms/training/index',
            'is_child' => 1,
            'image' => '13.png'
        ],

        //对账单查询-按资产
        'fms/billingquery/checkstatementassets'=> [
            'category' => 'billingquery',
            'category_name' => '对账单查询',
            'title' => '按资产',
            'url' => 'fms/billingquery/checkstatementassets',
            'is_child' => 1,
            'image' => '14.png'
        ],

        //对账单查询-按资金
        'fms/billingquery/checkthebill'=> [
            'category' => 'billingquery',
            'category_name' => '对账单查询',
            'title' => '按资金',
            'url' => 'fms/billingquery/checkthebill',
            'is_child' => 1,
            'image' => '14.png'
        ],

        //银行账户查询
        'fms/bank/index' => [
            'category' => 'bank',
            'category_name' => '银行账户查询',
            'title' => '银行账户查询',
            'url' => 'fms/bank/index',
            'is_child' => 0,
            'image' => '15.png'
        ],

    ],


    //运营系统
    'oms' => [

        //订单列表-当日订单列表
        'oms/order/index' => [
            'category' => 'order',
            'category_name' => '订单列表',
            'title' => '当日订单列表',
            'url' => 'oms/order/index',
            'is_child' => 1,
            'image' => '12.png'
        ],

        //订单列表-历史订单列表
        'oms/order/history' => [
            'category' => 'order',
            'category_name' => '订单列表',
            'title' => '历史订单列表',
            'url' => 'oms/order/history',
            'is_child' => 1,
            'image' => '12.png'
        ],

        //核算订单列表-当日核算订单列表
        'oms/account/index' => [
            'category' => 'account',
            'category_name' => '核算订单列表',
            'title' => '当日核算订单列表',
            'url' => 'oms/account/index',
            'is_child' => 1,
            'image' => '13.png'
        ],

        //核算订单列表-历史核算订单列表
        'oms/account/history' => [
            'category' => 'account',
            'category_name' => '核算订单列表',
            'title' => '历史核算订单列表',
            'url' => 'oms/account/history',
            'is_child' => 1,
            'image' => '13.png'
        ],



        //对账订单列表-支付明细
        'oms/paymentdetails/listpaymentdetails' => [
            'category' => 'paymentdetails',
            'category_name' => '对账订单列表',
            'title' => '支付明细',
            'url' => 'oms/paymentdetails/listpaymentdetails',
            'is_child' => 1,
            'image' => '14.png'
        ],

        //对账订单列表-还款明细
        'oms/repaymentschedule/repaymentprincipalinterestdetail' => [
            'category' => 'paymentdetails',
            'category_name' => '对账订单列表',
            'title' => '还款明细',
            'url' => 'oms/repaymentschedule/repaymentprincipalinterestdetail',
            'is_child' => 1,
            'image' => '14.png'
        ],



        //无效订单-今日无效订单
        'oms/invalidorders/index' => [
            'category' => 'invalidorders',
            'category_name' => '无效订单',
            'title' => '今日无效订单',
            'url' => 'oms/invalidorders/index',
            'is_child' => 1,
            'image' => '15.png'
        ],

        //无效订单-历史无效订单
        'oms/invalidorders/history' => [
            'category' => 'invalidorders',
            'category_name' => '无效订单',
            'title' => '历史无效订单',
            'url' => 'oms/invalidorders/history',
            'is_child' => 1,
            'image' => '15.png'
        ],

    ],

];