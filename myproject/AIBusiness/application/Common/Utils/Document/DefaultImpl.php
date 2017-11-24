<?php
/**
 * Created by PhpStorm.
 * Source: Wang
 * Date: 2016/9/14
 * Time: 15:43
 */

namespace app\Common\Utils\Document;

use app\Common\Utils\DocumentInterface;

/**
 * 文档生成
 * @Author : ww
 * Class DefaultImpl
 * @package Common\Utils\Document
 */
class DefaultImpl implements DocumentInterface
{
    private $_docName;//生成文档名称
    private $_docPath;//生成文档目录
    private $_demoArray = array();//文档数据
    private $_space = '    ';//4空格
    private $_listData = array();//用于生成列表的数组
    private $_listPdline = array();//用于生成列表的数组
    private $_scope=1;//默认的文档分类，0：内部，1：普通开发：2：特殊业务-银企对账

    /**
     * 文档生成的默认实现
     * DefaultImpl constructor.
     * @param null $docPath 生成文档目录
     */
    public function __construct($docPath = null,$scope=1)
    {
        //生成文档目录
        $_docPath = $docPath ?:config('DOC_PATH');
        $this->_scope = $scope; //接收初始化的文档类型
        $lastString = substr($_docPath, -1, 1);
        $requireSprit = $lastString == '/' ? true : false;
        $this->_docPath = $requireSprit ? $_docPath : $_docPath . '/';
        $AdminPdline= new \app\Common\Model\Platform\AdminPdline();
        $this->_listPdline  = $AdminPdline->get_pdlinelist();

    }

    /**
     * 生成API文档
     * @Author : ww
     * @param $docData API文档数据
     * @param $systemErrorMessage API错误信息
     * @param $docName API文档名称
     * @return bool
     */
    public function createDocument($docData, $systemErrorMessage, $docName)
    {
        try {
            //获取API文档名称
            $this->_docName = $docName;

            //生成API文档详细页
            foreach ($docData as $doc) {
                //if($doc['methodName']=="easysigncloud.platform.sign.single"){
                //    $iii=0;
                //}
                $this->_createSinglePage((array)$doc, $systemErrorMessage, $docData);
            }

            //生成API文档主页
            $this->_createIndexPage($docData);
            //生成消息通知说明文档页面
            $this->_createNotifyMessagePage($docData);
            //生成加密解密页面握手说明页面
            $this->_createJiamiMessagePage($docData);
            //生成附录说明页面
            $this->_createMuluMessagePage($docData);
            return true;
        } catch (\Exception $e) {
            \think\Log::write($e->getMessage());
            return false;
        }
    }

    /**
     * 获取消息通知说明页内容
     * @param $docData
     * @return string
     */
    private function _createNotifyHtmlInfo($docData)
    {
        $string = '';
        $string .= '<!DOCTYPE html>
                    <html >
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>' . $this->_docName . '</title>
                        <link rel="stylesheet" href="/docstatic/css/style.css">
                        <link rel="stylesheet" href="/docstatic/css/kancloud.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/hint.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/style.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/tomorrow.css" class="codestyle">
                        <script type="text/javascript" src="/docstatic/js/jquery-1.7.2.min.js"></script>
                        <script>
                            $(function(){
                                var zzsc = $(".jstree-container-ul .jstree-node");
                                zzsc.click(function(){
                                    $(this).addClass("jstree-open").removeClass("jstree-closed");
                                    $(this).siblings().addClass("jstree-closed");
                                });

                                var nav = $(".jstree-container-ul .jstree-node .jstree-children>li");
                                nav.click(function(){
                                    $(this).children(".jstree-wholerow").addClass("jstree-wholerow-clicked");
                                    $(this).siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                    $(this).parent().parent().siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                });
                            });
                        </script>
                    </head>
                    <body>
                    <div class="m-manual manual-reader manual-mode-view manual-active" >
                        <div class="manual-head">
                            <div class="left"><span class="slidebar"><i class="icon-menu"></i></span>
                                <a class="manual-title" href="###" title="">
                                    <b class="text">' . $this->_docName . '</b>
                                </a>
                            </div>
                        </div>
                        <div class="manual-body">';

        $string .= '<div class="manual-left">
            <div class="manual-tab" style="bottom: 35px;">
                <div class="tab-navg">
                    <span data-mode="view" class="navg-item active"><b class="text">目录</b></span>
                </div>
                <div class="tab-wrap">
                    <div class="tab-item manual-catalog">
                        <div class="catalog-list read-book-preview jstree jstree-default" onFocus="this.blur()">
                        	<ul class="jstree-container-ul jstree-wholerow-ul jstree-no-dots">
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="index.html">
                                                <i class="jstree-icon jstree-themeicon"></i>主页
                                            </a>
                                </li>
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="notify.html">
                                                <i class="jstree-icon jstree-themeicon"></i>消息通知
                                            </a>
                                </li>
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="jiami.html">
                                                <i class="jstree-icon jstree-themeicon"></i>API接入
                                            </a>
                            </li> <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="mulu.html">
                                                <i class="jstree-icon jstree-themeicon"></i>附录
                                            </a>
                                </li>';

        $temp_category = '';
//        $array_category = array();
        $i = 0;
        foreach ($docData as $doc) {
            $doc = (array)$doc;
            //0表示是内部用的，不显示出来
            //if($doc['scope']==0){
            if($doc['scope'] != $this->_scope){
                continue;
            }

            $li_class_name = 'jstree-closed';
            $li_class_name2 = '';
            $temp_filePath = '';
            //$temp_filePath = $doc['category'] . '\\' . $doc['methodName'] . '.html';
            $temp_filePath = $doc['categoryPath'] . '\\' . $doc['methodName'] . '.html';
            if ($temp_category != $doc['category']) {
//            if(in_array($temp_category,$array_category)){
                if ($i == 0) {
                    $string .= '<li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                } else {
                    $string .= '</ul></li><li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                }
                $i += 1;
                $temp_category = $doc['category'];
            }
            $string .= '<li class="jstree-node  jstree-leaf ">
                                        	<div class="jstree-wholerow ' . $li_class_name2 . '">&nbsp;</div>
                                           	<i class="jstree-icon jstree-ocl"></i>
                                            <a class="jstree-anchor jstree-clicked jstree-hovered nav-h" href="' . $temp_filePath . '">
                                            	<i class="jstree-icon jstree-themeicon"></i>
                                                ' . $doc['apiName'] . '<br/>' . $doc['methodName'] . '
                                           	</a>
                                        </li>';

        }

        $string .= '</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

        $string .= '<div class="manual-right"><div class="m-article">
                <div class="article-wrap">
                    <div class="article-view"><div class="view-body think-editor-content">

                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;"><h2>' . 易签云平台下发消息说明 . '</h2></div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>整体说明</h3></p>
                                 1.消息下发的地址，就是开发者创建的应用的地址,支持https.创建应用时，必须填写准确，包括端口。<br/>
                                 2.消息通知的url带有app_key,签名sign和时间戳timestamp，开发者收到消息后，按调用api的方式生成签名比对，证实消息真实性<br/>
                                   &nbsp;&nbsp;如果发现不是自己的app_key或者签名sign不对或者时间戳不正确，请不要处理自己的业务。<br/>
                                 3.所有的消息下发都采用json格式，里边都有msg_type用了区分不同的消息类型。<br/>
                                 4.开发者在收到消息之后，必须在5秒钟之内回复字符串"success"，平台方认为已经通知完成，否则将会出现多次通知。
                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>授权通知</h3></p>
                                  1.企业用户在平台授权5分钟之内会通知给开发者，该消息会多次通知（每5分钟一次），直至开发者正确回复。<br/>
                                  2.具体示例如下:<br/>
                                  {<br/>
                                    "msg_type":"auth_notify",<br/>
                                    "user_id":"授权用户user_id,整形",<br/>
                                    "create_time":"时间戳，整形",<br/>
                                    "app_key":"你应用的appkey"<br/>
                                   }<br/>
                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>取消授权通知</h3></p>
                                  1.用户取消授权之后立刻通知开发者，该消息只通知一次<br/>
                                  2.具体示例如下:<br/>
                                  {<br/>
                                    "msg_type":"auth_cancel_notify",<br/>
                                    "user_id":"授权用户user_id,整形",<br/>
                                    "cancel_time":"时间戳，整形",<br/>
                                    "app_key":"你应用的appkey"<br/>
                                   }<br/>
                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>单个签约异步通知</h3></p>
                                  1.合同签署完成之后，通知开发者，该消息会多次通知，总共7次，之后不再通知，通知的时间间隔是:<br/>
                                     &nbsp;&nbsp;0s/30s/5m/30m/1h/12h/24h/,如果还没通知成功，那么不再通知，开发者调用其他接口主动查询<br/>
                                  2.签署成功的通知，具体示例如下:<br/>
                                    {<br/>
                                    "msg_id":"消息id",<br/>
                                    "msg_type":"sign_single",<br/>
                                    "query_code":"客户端查询码",<br/>
                                    "result":"成功为0，整形",<br/>
                                    "detail":<br/>
                                       &nbsp;{<br/>
                                        &nbsp;&nbsp;&nbsp;"contract_id":"合同id,整形",<br/>
                                        &nbsp;&nbsp;&nbsp;"contract_status":"合同状态,整形，1为签署中,2为完成",<br/>
                                        &nbsp;&nbsp;&nbsp;"file_info":"合同获取地址，具体规则可参照同步返回接口",<br/>
                                       &nbsp;}<br/>
                                    }<br/>
                                  3.签署失败的通知，具体示例如下:<br/>
                                     {<br/>
                                        "msg_id":"消息id",<br/>
                                        "msg_type":"sign_single",<br/>
                                        "query_code":"客户端查询码",<br/>
                                        "result":"失败为1，整形",<br/>
                                        "message":"错误码，具体错误原因请对照错误码",<br/>
                                     }

                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>批量签约异步通知</h3></p>
                                  1.合同签署完成之后，通知开发者，该消息会多次通知，总共7次，之后不再通知，通知的时间间隔是:<br/>
                                     &nbsp;&nbsp;0s/30s/5m/30m/1h/12h/24h/,如果还没通知成功，那么不再通知，开发者调用其他接口主动查询<br/>
                                  2.签署成功的通知，具体示例如下:<br/>
                                    {<br/>
                                    "msg_id":"消息id",<br/>
                                    "msg_type":"sign_batch",<br/>
                                    "result":"全部成功为0,部分成功为1，整形",<br/>
									"total_count":"总处理数量，整形",<br/>
									"success_count":"处理成功数量，整形",<br/>
									"fail_count":"处理失败数量，整形",<br/>
                                    "detail":<br/>
                                       &nbsp;{[<br/>
                                        &nbsp;&nbsp;&nbsp;"contract_id":"合同id,整形",<br/>
                                        &nbsp;&nbsp;&nbsp;"contract_status":"合同状态,整形，1为签署中,2为完成",<br/>
                                        &nbsp;&nbsp;&nbsp;"file_info":"合同获取地址，具体规则可参照同步返回接口",<br/>
										&nbsp;&nbsp;&nbsp;"query_code":"客户端查询码",<br/>
										&nbsp;&nbsp;&nbsp;"sub_result":"该份合同的结果，成功为0，失败为1",<br/>
										&nbsp;&nbsp;&nbsp;"sub_message":"success或者错误码",<br/>
                                       &nbsp;],[.......]}<br/>
                                    }<br/>
                                  3.签署失败的通知，具体示例如下:<br/>
                                    {<br/>
                                        "msg_id":"消息id",<br/>
                                        "msg_type":"sign_batch",<br/>
                                        "query_code":"客户端查询码",<br/>
                                        "result":"全部失败为2，整形",<br/>
                                        "message":"错误码，具体错误原因请对照错误码",<br/>
                                     }
                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>流转签约需求通知</h3></p>
                                  1.上一个流转方签署完成之后，会通知下一个流转方的开发者，该消息会多次通知，总共7次，之后不再通知，通知的时间间隔是:<br/>
                                     &nbsp;&nbsp;0s/30s/5m/30m/1h/12h/24h/,如果还没通知成功，那么不再通知，开发者调用其他接口主动查询<br/>
                                  2.通知内容，具体示例如下:<br/>
                                    {<br/>
                                    "msg_type":"transfer_notify",<br/>
                                    "query_code":"客户端查询码",<br/>
                                    "tmpl_code":"合同签署文件编码",<br/>
                                    "target_content":"上一个开发者传递过来的信息",<br/>
									"target_time":"截止签署时间",<br/>
                                    }

                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>流转签约完成通知</h3></p>
                                  1.合同签署完成之后，通知合同发起方，该消息会多次通知，总共7次，之后不再通知，通知的时间间隔是:<br/>
                                     &nbsp;&nbsp;0s/30s/5m/30m/1h/12h/24h/,如果还没通知成功，那么不再通知，开发者调用其他接口主动查询<br/>
                                  2.签署成功的通知，具体示例如下:<br/>
                                    {<br/>
                                    "msg_type":"sign_complete_notify",<br/>
                                    "query_code":"客户端查询码",<br/>
                                    "contract_id":"合同id,整形",<br/>
                                    "contract_status":"合同状态,2为完成",<br/>
                                    }
                            </div>

                            </div></div></div></div></div></div></body></html>';

        return $string;
    }
    /**
     * 获取消息通知说明页内容
     * @param $docData
     * @return string
     */
    private function _createJiamiHtmlInfo($docData)
    {
        $string = '';
        $string .= '<!DOCTYPE html>
                    <html >
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>' . $this->_docName . '</title>
                        <link rel="stylesheet" href="/docstatic/css/style.css">
                        <link rel="stylesheet" href="/docstatic/css/kancloud.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/hint.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/style.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/tomorrow.css" class="codestyle">
                        <script type="text/javascript" src="/docstatic/js/jquery-1.7.2.min.js"></script>
                        <script>
                            $(function(){
                                var zzsc = $(".jstree-container-ul .jstree-node");
                                zzsc.click(function(){
                                    $(this).addClass("jstree-open").removeClass("jstree-closed");
                                    $(this).siblings().addClass("jstree-closed");
                                });

                                var nav = $(".jstree-container-ul .jstree-node .jstree-children>li");
                                nav.click(function(){
                                    $(this).children(".jstree-wholerow").addClass("jstree-wholerow-clicked");
                                    $(this).siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                    $(this).parent().parent().siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                });
                            });
                        </script>
                    </head>
                    <body>
                    <div class="m-manual manual-reader manual-mode-view manual-active" >
                        <div class="manual-head">
                            <div class="left"><span class="slidebar"><i class="icon-menu"></i></span>
                                <a class="manual-title" href="###" title="">
                                    <b class="text">' . $this->_docName . '</b>
                                </a>
                            </div>
                        </div>
                        <div class="manual-body">';

        $string .= '<div class="manual-left">
            <div class="manual-tab" style="bottom: 35px;">
                <div class="tab-navg">
                    <span data-mode="view" class="navg-item active"><b class="text">目录</b></span>
                </div>
                <div class="tab-wrap">
                    <div class="tab-item manual-catalog">
                        <div class="catalog-list read-book-preview jstree jstree-default" onFocus="this.blur()">
                        	<ul class="jstree-container-ul jstree-wholerow-ul jstree-no-dots">
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="index.html">
                                                <i class="jstree-icon jstree-themeicon"></i>主页
                                            </a>
                                </li>
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="notify.html">
                                                <i class="jstree-icon jstree-themeicon"></i>消息通知
                                            </a>
                                </li>
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="jiami.html">
                                                <i class="jstree-icon jstree-themeicon"></i>API接入
                                            </a>
                            </li>
                             <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="mulu.html">
                                                <i class="jstree-icon jstree-themeicon"></i>附录
                                            </a>
                                </li>';

        $temp_category = '';
//        $array_category = array();
        $i = 0;
        foreach ($docData as $doc) {
            $doc = (array)$doc;
            //0表示是内部用的，不显示出来
            //if($doc['scope']==0){
            if($doc['scope'] != $this->_scope){
                continue;
            }

            $li_class_name = 'jstree-closed';
            $li_class_name2 = '';
            $temp_filePath = '';
            //$temp_filePath = $doc['category'] . '\\' . $doc['methodName'] . '.html';
            $temp_filePath = $doc['categoryPath'] . '\\' . $doc['methodName'] . '.html';
            if ($temp_category != $doc['category']) {
//            if(in_array($temp_category,$array_category)){
                if ($i == 0) {
                    $string .= '<li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                } else {
                    $string .= '</ul></li><li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                }
                $i += 1;
                $temp_category = $doc['category'];
            }
            $string .= '<li class="jstree-node  jstree-leaf ">
                                        	<div class="jstree-wholerow ' . $li_class_name2 . '">&nbsp;</div>
                                           	<i class="jstree-icon jstree-ocl"></i>
                                            <a class="jstree-anchor jstree-clicked jstree-hovered nav-h" href="' . $temp_filePath . '">
                                            	<i class="jstree-icon jstree-themeicon"></i>
                                                ' . $doc['apiName'] . '<br/>' . $doc['methodName'] . '
                                           	</a>
                                        </li>';

        }

        $string .= '</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

        $string .= '<div class="manual-right"><div class="m-article">
                <div class="article-wrap">
                    <div class="article-view"><div class="view-body think-editor-content">

                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;"><h2>' . 易签云平台下API接入说明. '</h2></div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>接入概述</h3></p>
                                1.API(Application Programming Interface,应用程序编程接口)是一些预先定义的函数，目的是提供应用程序与开发人员基于某软件或硬件的以访问一组例程的能力，而又无需访问源码，或理解内部工作机制的细节。
                                  API接入就是将API函数加入程序代码之中，使程序拥有此函数的功能<br/>
                                2.API接入,传入参数验证服务器地址的有效性<br/>
                                3.依据接口文档实现业务逻辑<br/>
                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>依据接口文档实现业务逻辑</h3></p>
                                  1.接入API需要先成为开发者，可以在易签云官网注册账号之后到开发者中心，创建应用，审核通过之后就成为开发者了<br/>
                                  2.创建应用时会要求填入通讯地址端口，以及自动分配app_key和app_secret等信息，请注意保密<br/>
                                  3.开发者使用应用的信息来调用易签云开放的api接口，以及接收处理易签云下发的消息，所有通讯都必须验证身份有效性和时效性，否则引起后果开发方自己承担<br/>
                                  4.如何进行通讯验证 ，详情请参考<a href="/home/encryption/index">API接入详细文档说明</a><br/>
                            </div>


                            </div></div></div></div></div></div></body></html>';

        return $string;
    }



    /**
     * 获取附录说明页内容
     * @param $docData
     * @return string
     */
    private function _createMuluHtmlInfo($docData)
    {
        $string = '';
        $string .= '<!DOCTYPE html>
                    <html >
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>' . $this->_docName . '</title>
                        <link rel="stylesheet" href="/docstatic/css/style.css">
                        <link rel="stylesheet" href="/docstatic/css/kancloud.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/hint.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/style.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/tomorrow.css" class="codestyle">
                        <script type="text/javascript" src="/docstatic/js/jquery-1.7.2.min.js"></script>
                        <script>
                            $(function(){
                                var zzsc = $(".jstree-container-ul .jstree-node");
                                zzsc.click(function(){
                                    $(this).addClass("jstree-open").removeClass("jstree-closed");
                                    $(this).siblings().addClass("jstree-closed");
                                });

                                var nav = $(".jstree-container-ul .jstree-node .jstree-children>li");
                                nav.click(function(){
                                    $(this).children(".jstree-wholerow").addClass("jstree-wholerow-clicked");
                                    $(this).siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                    $(this).parent().parent().siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                });
                            });
                        </script>
                    </head>
                    <body>
                    <div class="m-manual manual-reader manual-mode-view manual-active" >
                        <div class="manual-head">
                            <div class="left"><span class="slidebar"><i class="icon-menu"></i></span>
                                <a class="manual-title" href="###" title="">
                                    <b class="text">' . $this->_docName . '</b>
                                </a>
                            </div>
                        </div>
                        <div class="manual-body">';

        $string .= '<div class="manual-left">
            <div class="manual-tab" style="bottom: 35px;">
                <div class="tab-navg">
                    <span data-mode="view" class="navg-item active"><b class="text">目录</b></span>
                </div>
                <div class="tab-wrap">
                    <div class="tab-item manual-catalog">
                        <div class="catalog-list read-book-preview jstree jstree-default" onFocus="this.blur()">
                        	<ul class="jstree-container-ul jstree-wholerow-ul jstree-no-dots">
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="index.html">
                                                <i class="jstree-icon jstree-themeicon"></i>主页
                                            </a>
                                </li>
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="notify.html">
                                                <i class="jstree-icon jstree-themeicon"></i>消息通知
                                            </a>
                                </li>
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="jiami.html">
                                                <i class="jstree-icon jstree-themeicon"></i>API接入
                                            </a>
                                </li>
                                <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="mulu.html">
                                                <i class="jstree-icon jstree-themeicon"></i>附录
                                            </a>
                                </li>';

        $temp_category = '';
//        $array_category = array();
        $i = 0;
        foreach ($docData as $doc) {
            $doc = (array)$doc;
            //0表示是内部用的，不显示出来
            //if($doc['scope']==0){
            if($doc['scope'] != $this->_scope){
                continue;
            }

            $li_class_name = 'jstree-closed';
            $li_class_name2 = '';
            $temp_filePath = '';
            //$temp_filePath = $doc['category'] . '\\' . $doc['methodName'] . '.html';
            $temp_filePath = $doc['categoryPath'] . '\\' . $doc['methodName'] . '.html';
            if ($temp_category != $doc['category']) {
//            if(in_array($temp_category,$array_category)){
                if ($i == 0) {
                    $string .= '<li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                } else {
                    $string .= '</ul></li><li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                }
                $i += 1;
                $temp_category = $doc['category'];
            }
            $string .= '<li class="jstree-node  jstree-leaf ">
                                        	<div class="jstree-wholerow ' . $li_class_name2 . '">&nbsp;</div>
                                           	<i class="jstree-icon jstree-ocl"></i>
                                            <a class="jstree-anchor jstree-clicked jstree-hovered nav-h" href="' . $temp_filePath . '">
                                            	<i class="jstree-icon jstree-themeicon"></i>
                                                ' . $doc['apiName'] . '<br/>' . $doc['methodName'] . '
                                           	</a>
                     </li>';

        }

        $string .= '</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        $conf_identity = config('conf-identity.identity_type');
        $strts = '';
        foreach($conf_identity as $key =>$val){
            $strts .= "<tr><td>".$key."</td><td>".$val."</td></tr>";
        }
        //产品先
        $list = $this->_listPdline;
        $apline_strts = '';
        foreach($list as $k =>$v){
            $apline_strts .= "<tr><td>".$v['code']."</td><td>".$v['name']."</td></tr>";
        }
        $string .= '<div class="manual-right"><div class="m-article">
                <div class="article-wrap">
                    <div class="article-view"><div class="view-body think-editor-content">
                            <div><h2>' .附录. '</h2></div>
                            <div>
                            <p><h3>证件类型</h3></p>
                               <table>
                               <thead>
                                    <tr>
                                    <th>证件编码</th>
                                    <th>证件名称</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                '.
                                     $strts
                                    .'
                                 </tbody></table>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p><h3>产品线对应CODE码</h3></p>
                                  <table>
                               <thead>
                                    <tr>
                                    <th>code</th>
                                    <th>错误信息</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                '.$apline_strts.'
                                 </tbody></table>
                            </div></div></div></div></div></body></html>';

        return $string;
    }

    /**
     * 获取API主页内容
     * @param $docData
     * @return string
     */
    private function _createIndexHtmlInfo($docData)
    {
        $string = '';
        $string .= '<!DOCTYPE html>
                    <html >
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
                        <title>' . $this->_docName . '</title>
                        <link rel="stylesheet" href="/docstatic/css/style.css">
                        <link rel="stylesheet" href="/docstatic/css/kancloud.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/hint.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/style.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/tomorrow.css" class="codestyle">
                        <script type="text/javascript" src="/docstatic/js/jquery-1.7.2.min.js"></script>
                        <script>
                            $(function(){
                                var zzsc = $(".jstree-container-ul .jstree-node");
                                zzsc.click(function(){
                                    $(this).addClass("jstree-open").removeClass("jstree-closed");
                                    $(this).siblings().addClass("jstree-closed");
                                });
                                
                                var nav = $(".jstree-container-ul .jstree-node .jstree-children>li");
                                nav.click(function(){
                                    $(this).children(".jstree-wholerow").addClass("jstree-wholerow-clicked");
                                    $(this).siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                    $(this).parent().parent().siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                });
                            });
                        </script>
                    </head>
                    <body>
                    <div class="m-manual manual-reader manual-mode-view manual-active" >
                        <div class="manual-head">
                            <div class="left"><span class="slidebar"><i class="icon-menu"></i></span>
                                <a class="manual-title" href="###" title="">
                                    <b class="text">' . $this->_docName . '</b>
                                </a>
                            </div>
                        </div>
                        <div class="manual-body">';

        $string .= '<div class="manual-left">
            <div class="manual-tab" style="bottom: 35px;">
                <div class="tab-navg">
                    <span data-mode="view" class="navg-item active"><b class="text">目录</b></span>
                </div>
                <div class="tab-wrap">
                    <div class="tab-item manual-catalog">
                        <div class="catalog-list read-book-preview jstree jstree-default" onFocus="this.blur()">
                        	<ul class="jstree-container-ul jstree-wholerow-ul jstree-no-dots">
                        	<li style="padding-left: 28px;">
                                    <a class="jstree-anchor" href="index.html">
                                    	<i class="jstree-icon jstree-themeicon"></i>主页
                                    </a>
                        	</li>
                            <li style="padding-left: 28px;">
                                    <a class="jstree-anchor" href="notify.html">
                                    	<i class="jstree-icon jstree-themeicon"></i>消息通知
                                    </a>
                        	</li>
                        	<li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="jiami.html">
                                                <i class="jstree-icon jstree-themeicon"></i>API接入
                                            </a>
                            </li>
                            <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="mulu.html">
                                                <i class="jstree-icon jstree-themeicon"></i>附录
                                            </a>
                                </li>';

        $temp_category = '';
//        $array_category = array();
        $i = 0;
        foreach ($docData as $doc) {
            $doc = (array)$doc;
            //0表示是内部用的，不显示出来
           // if($doc['scope']==0){
            if($doc['scope'] != $this->_scope){
                continue;
            }

            $li_class_name = 'jstree-closed';
            $li_class_name2 = '';
            $temp_filePath = '';
            //$temp_filePath = $doc['category'] . '\\' . $doc['methodName'] . '.html';
            $temp_filePath = $doc['categoryPath'] . '\\' . $doc['methodName'] . '.html';
            if ($temp_category != $doc['category']) {
//            if(in_array($temp_category,$array_category)){
                if ($i == 0) {
                    $string .= '<li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                } else {
                    $string .= '</ul></li><li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                }
                $i += 1;
                $temp_category = $doc['category'];
            }
            $string .= '<li class="jstree-node  jstree-leaf ">
                                        	<div class="jstree-wholerow ' . $li_class_name2 . '">&nbsp;</div>
                                           	<i class="jstree-icon jstree-ocl"></i>
                                            <a class="jstree-anchor jstree-clicked jstree-hovered nav-h" href="' . $temp_filePath . '">
                                            	<i class="jstree-icon jstree-themeicon"></i>
                                                ' . $doc['apiName'] . '<br/>' . $doc['methodName'] . '
                                           	</a>
                                        </li>';

        }

        $string .= '</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

        $string .= '<div class="manual-right"><div class="m-article">
                <div class="article-wrap">
                    <div class="article-view"><div class="view-body think-editor-content">
                           
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;"><h2>' . $this->_docName . '</h2></div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p>用途</p>
                                开发者可以查看每个接口具体的输入输出参数以及对应的错误编码
                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p>版本</p>
                                V0.1
                            </div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p>时间</p>'.
                             date("Y-m-d H:i:s",time())
                            .'</div>
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
                            <p>联系方式</p>
                            易签云科技，陈工，15524683910
                            </div></div></div></div></div></div></div></body></html>';

        return $string;
    }

    /**
     * 获取API详细页左侧导航栏内容
     * @param $docData
     * @param $filePath
     * @param $docP
     * @return string
     */
    private function _createLeftMenuInfo($docData, $filePath, $docP)
    {
        $string = '<div class="manual-left">
            <div class="manual-tab" style="bottom: 35px;">
                <div class="tab-navg">
                    <span data-mode="view" class="navg-item active"><b class="text">目录</b></span>
                </div>
                <div class="tab-wrap">
                    <div class="tab-item manual-catalog">
                        <div class="catalog-list read-book-preview jstree jstree-default" onFocus="this.blur()">
                        	<ul class="jstree-container-ul jstree-wholerow-ul jstree-no-dots">
                        	<li style="padding-left: 28px;">
                               		
                                    <a class="jstree-anchor" href="../index.html">
                                    	<i class="jstree-icon jstree-themeicon"></i>主页
                                    </a>
                        	</li>
                            <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="../notify.html">
                                                <i class="jstree-icon jstree-themeicon"></i>消息通知
                                            </a>
                            </li>
                             <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="../jiami.html">
                                                <i class="jstree-icon jstree-themeicon"></i>API接入
                                            </a>
                            </li>
                             <li style="padding-left: 28px;">
                                            <a class="jstree-anchor" href="../mulu.html">
                                                <i class="jstree-icon jstree-themeicon"></i>附录
                                            </a>
                                </li>';



        $temp_category = '';
        $i = 0;
        foreach ($docData as $doc) {
            $doc = (array)$doc;
            //0表示是内部用的，不显示出来
            //if($doc['scope']==0){
            if($doc['scope'] != $this->_scope){
                continue;
            }
            $li_class_name = 'jstree-closed';
            $li_class_name2 = '';
            if ($doc['category'] == $docP['category']) {
                $li_class_name = ' jstree-open';
            }
            if ($doc['methodName'] == $docP['methodName']) {
                $li_class_name2 = ' jstree-wholerow-clicked';
            }
            $temp_filePath = '';
//            $temp_filePath =  $filePath . $doc['category'] . '\\'.$doc['methodName'] . '.html';
            //$temp_filePath = $doc['category'] . '\\' . $doc['methodName'] . '.html';
            $temp_filePath = $doc['categoryPath'] . '\\' . $doc['methodName'] . '.html';
            if ($temp_category != $doc['category']) {
                if ($i == 0) {
                    $string .= '<li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                } else {
                    $string .= '</ul></li><li class="jstree-node ' . $li_class_name . '">
                               		<div class="jstree-wholerow">&nbsp;</div>
                                    <i class="jstree-icon jstree-ocl"></i>
                                    <a class="jstree-anchor" href="###">
                                    	<i class="jstree-icon jstree-themeicon"></i>' . $doc['category'] . '
                                    </a>
                                    <ul class="jstree-children">';
                }
                $i += 1;
                $temp_category = $doc['category'];
            }
            $string .= '<li class="jstree-node  jstree-leaf ">
                                        	<div class="jstree-wholerow ' . $li_class_name2 . '">&nbsp;</div>
                                           	<i class="jstree-icon jstree-ocl"></i>
                                            <a class="jstree-anchor jstree-clicked jstree-hovered nav-h" href="../' . $temp_filePath . '">
                                            	<i class="jstree-icon jstree-themeicon"></i>
                                                ' . $doc['apiName'] . '<br/>' . $doc['methodName'] . '
                                           	</a>
                                        </li>';

        }

        $string .= '</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        return $string;
    }

    /**
     * 生成API主页
     * @param $docData
     * @throws \Exception
     */
    private function _createIndexPage($docData)
    {
        $path = $this->_docPath;
        $filePath = $path . 'index.html';//创建API文件
        try {
            $fp = fopen($filePath, "w+");
            $txt = $this->_createIndexHtmlInfo($docData);
            fwrite($fp, $txt);
            fclose($fp);
        } catch (\Exception $e) {
            throw new \Exception('生成单页错误！文件路径：' . $filePath, 1);
        }
    }

    /**
     * 生成消息通知说明页面
     * @param $docData
     * @throws \Exception
     */
    private function _createNotifyMessagePage($docData)
    {
        $path = $this->_docPath;
        $filePath = $path . 'notify.html';//创建API文件
        try {
            $fp = fopen($filePath, "w+");
            $txt = $this->_createNotifyHtmlInfo($docData);
            fwrite($fp, $txt);
            fclose($fp);
        } catch (\Exception $e) {
            throw new \Exception('生成单页错误！文件路径：' . $filePath, 1);
        }
    }


    /**
     * 生成加密解密页面握手说明页面
     * @param $docData
     * @throws \Exception
     */
    private function _createJiamiMessagePage($docData)
    {
        $path = $this->_docPath;
        $filePath = $path . 'jiami.html';//创建API文件
        try {
            $fp = fopen($filePath, "w+");
            $txt = $this->_createJiamiHtmlInfo($docData);
            fwrite($fp, $txt);
            fclose($fp);
        } catch (\Exception $e) {
            throw new \Exception('生成单页错误！文件路径：' . $filePath, 1);
        }
    }


    /**
     * 生成加密解密页面握手说明页面
     * @param $docData
     * @throws \Exception
     */
    private function _createMuluMessagePage($docData)
    {
        $path = $this->_docPath;
        $filePath = $path . 'mulu.html';//创建API文件
        try {
            $fp = fopen($filePath, "w+");
            $txt = $this->_createMuluHtmlInfo($docData);

            fwrite($fp, $txt);
            fclose($fp);
        } catch (\Exception $e) {
            throw new \Exception('生成单页错误！文件路径：' . $filePath, 1);
        }
    }



    /**
     * 生成API详细页
     * @param $doc
     * @param $systemErrorMessage
     * @throws \Exception
     */
    private function _createSinglePage($doc, $systemErrorMessage, $docData)
    {
        //$doc_category = empty($doc['category']) ? '未分类' : $doc['category'];
        $doc_category = empty($doc['categoryPath']) ? 'undefine' : $doc['categoryPath'];

        $categoryForFileLink = strtolower($doc_category);

        $path = $this->_docPath . $categoryForFileLink . '/';//组织路径
        $path = (iconv('utf-8', 'gbk', $path));
        $this->_createDocPath($path);//创建目录
        $fileName = $doc['methodName'];
        $filePath = $path . $fileName . '.html';//创建API文件
        try {
            $fp = fopen($filePath, "w+");
            $txt = $this->_getFormatStringForSinglePage($doc, $systemErrorMessage, $docData);
            fwrite($fp, $txt);
            fclose($fp);
        } catch (\Exception $e) {
            throw new \Exception('生成单页错误！文件路径：' . $filePath, 1);
        }
    }

    /**
     * 获取API详细页网页内容
     * @author ww
     * @param $doc
     * @param $systemErrorMessage
     * @return string
     */
    private function _getFormatStringForSinglePage($doc, $systemErrorMessage, $docData)
    {
        $content = '';

        $left = $this->_createLeftMenuInfo($docData, $this->_docPath, $doc);

        //获取API详细页网页内容—【Api名称、ApiURI、Api说明、调用方法】
        $content .= $this->_getDocHeaderStringForWiki($doc, $left);
        //获取API详细页网页内容—输入参数示例及说明
        $content .= $this->_getDocParamsStringForWiki($doc['params']);

        //获取API详细页网页内容—正确返回示例及说明
        $content .= $this->_getDocReturnDemoStringForWiki($doc);

        //获取API详细页网页内容—错误返回示例及说明
        $content .= $this->_getDocErrorReturnDemoStringForWiki();

        //获取API详细页网页内容—错误码对照表
        $content .= $this->_getDocErrorMsgStringForWiki((array)$systemErrorMessage);


        return $content;
    }

    /**
     * 获取API详细页网页内容—【Api名称、ApiURI、Api说明、调用方法】
     * @author ww
     * @param $doc
     * @return string
     */
    private function _getDocHeaderStringForWiki($doc, $left)
    {
        $description = str_replace("\n", "\\\\ ", $doc['description']);
        $string = '';
        $string .= '<!DOCTYPE html>
                    <html >
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
                        <title>' . $this->_docName . '</title>
                        <link rel="stylesheet" href="/docstatic/css/style.css">
                        <link rel="stylesheet" href="/docstatic/css/kancloud.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/hint.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/style.min.css">
                        <link charset="utf-8" rel="stylesheet" href="/docstatic/css/tomorrow.css" class="codestyle">
                        <script type="text/javascript" src="/docstatic/js/jquery-1.7.2.min.js"></script>
                        <script>
                            $(function(){
                                var zzsc = $(".jstree-container-ul .jstree-node");
                                zzsc.click(function(){
                                    $(this).addClass("jstree-open").removeClass("jstree-closed");
                                    $(this).siblings().addClass("jstree-closed");
                                });
                                
                                var nav = $(".jstree-container-ul .jstree-node .jstree-children>li");
                                nav.click(function(){
                                    $(this).children(".jstree-wholerow").addClass("jstree-wholerow-clicked");
                                    $(this).siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                    $(this).parent().parent().siblings().children(".jstree-wholerow").removeClass("jstree-wholerow-clicked");
                                });
                            });
                        </script>
                    </head>
                    <body>
                    <div class="m-manual manual-reader manual-mode-view manual-active" >
                        <div class="manual-head">
                            <div class="left"><span class="slidebar"><i class="icon-menu"></i></span>
                                <a class="manual-title" href="###" title="">
                                    <b class="text">' . $this->_docName . '</b>
                                </a>
                            </div>
                        </div>
                        <div class="manual-body">' . $left;
        $string .= '<div class="manual-right">
            <div class="m-article">
                <div class="article-wrap">
                    <div class="article-view">
                        <div class="view-body think-editor-content">
                           
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
								<h2>Api名称</h2>
								<p>' . $doc['apiName'] . '</p>
                            </div>
                            
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
								<h3>作者</h3>
								<p>' . $doc['author'] . '</p>
                            </div>
                            
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
								<h2>ApiURI</h2>
								<p>' . $doc['methodName'] . '</p>
                            </div>
                            
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
								<h2>Api说明</h2>
								<p>' . $description . '</p>
                            </div>
                            
                            <div style=" border-bottom:1px solid #ccc; margin:30px 0px;">
								<h2>调用方法</h2>
								<p>Method: Post</p>
                            </div>';
        return $string;
    }

    /**
     * 获取API详细页网页内容—输入参数示例及说明
     * @author ww
     * @param $params
     * @return string
     */
    private function _getDocParamsStringForWiki($params)
    {
        $string = '';
        if (!is_null($params)) {
            $string .= '                            <h2 >输入参数示例及说明</h2>';
            $string .= '<pre class="code">{';
            if (is_array($params)) {
                $string .= $this->_getDocStringForWikiWithArray($params);
            } else {
                $string .= $this->_getDocStringForWikiWithObject($params);
            }
            $string .= '}</pre>';
        }
        return $string;
    }

    /**
     * 获取API详细页网页内容—正确返回示例及说明
     * @author ww
     * @param $doc
     * @return string
     */
    private function _getDocReturnDemoStringForWiki($doc)
    {
        $string = '';
        $string .= '                            <h2 >正确返回示例及说明</h2>';
        $string .= '<pre class="code">{';
        $returnCodeString = $this->_getStringForReturn($doc);
        $string .= $returnCodeString;
        $string .= '}</pre>';
        return $string;
    }

    /**
     * 获取API详细页网页内容—错误返回示例及说明
     * @author ww
     * @return string
     */
    private function _getDocErrorReturnDemoStringForWiki()
    {
        //【错误返回示例及说明】用数据
        $errorReturn = $this->_getObjectForErrorReturn();

        $string = '';
        $string .= '                            <h2 >错误返回示例及说明</h2>';
        $string .= '<pre class="code">{';
        $string .= $this->_getDocStringForWikiWithObject($errorReturn);
        $string .= '}</pre>';
        return $string;
    }

    /**
     * 获取API详细页网页内容—错误码对照表
     * @author ww
     * @param $systemErrorMessage 错误码信息
     * @return string
     */
    private function _getDocErrorMsgStringForWiki($systemErrorMessage)
    {
        $string = '';
        $string .= '                            <h2 >错误码对照表</h2>';
        $string .= '                                <table ><thead>
                                    <tr>
                                    <th>code</th>
                                    <th>错误信息</th>
                                    </tr>
                                </thead>                              
                                <tbody>';
        $string .= $this->_getStringForErrorMsg($systemErrorMessage);
        $string .= '</tbody></table></div></div></div></div></div></div></body></html>';
        return $string;
    }

    /**
     * 获取【正确返回示例及说明】用数据
     * @param $doc
     * @return string
     */
    public function _getStringForReturn($doc)
    {
        ini_set('error_reporting', E_STRICT);
        $api_return = new \stdClass();
        //$api_return = (object)array();
        //$api_return = new stdClass();
        $api_return->code->type = 'int';
        $api_return->code->demo = '0';
        $api_return->message->type = 'string';
        $api_return->message->demo = 'success';
        if (!empty($doc['return'])) {
            $api_return->data->type = 'object';
            $api_return->data->subs = $doc['return'];
        }

        if (is_array($api_return)) {
            $returnCodeString = $this->_getDocStringForWikiWithArray($api_return);
            return $returnCodeString;
        } else {
            $returnCodeString = $this->_getDocStringForWikiWithObject($api_return);
            return $returnCodeString;
        }
    }

    /**
     * 获取【错误返回示例及说明】用数据
     * @author ww
     * @return \stdClass
     */
    private function _getObjectForErrorReturn()
    {
        $errorReturn = new \stdClass();
        $errorReturn->code->type = 'string';
        $errorReturn->code->demo = 'S0001';
        $errorReturn->message->type = 'string';
        $errorReturn->message->demo = '请求域名不在白名单';
        return $errorReturn;
    }

    /**
     * 获取【错误码对照表】用数据
     * @author ww
     * @param $systemErrorMessage 错误数组
     * @return string
     */
    private function _getStringForErrorMsg($systemErrorMessage)
    {
        $string = '';
        if (!is_null($systemErrorMessage)) {
            foreach ($systemErrorMessage as $code => $msg) {
                if ($msg != 'success') {
                    $string .= '<tr ><td > ' . $code . '    </td><td >' . $msg . ' </td></tr>';
                }
            }
        }
        return $string;
    }

    /**
     * 获取配置数组格式参数解析后的字符串
     * @author ww
     * @param $paramsArray
     * @param int $level
     * @return string
     */
    private function _getDocStringForWikiWithArray($paramsArray, $level = 0)
    {
        $string = '';
        $preSpace = str_repeat($this->_space, $level);
        $string .= "[\r\n";
        if (!empty($paramsArray)) {
            foreach ($paramsArray[0] as $key => $object) {
                $this->_demoArray[] = count($object->demo);
            }
            $max = max($this->_demoArray);
            $max = $max >= 2 ? $max : 2;
            $this->_demoArray = array();//本级结束直接清空
            for ($i = 0; $i < $max; $i++) {
                $string .= $this->_getDocParamsStringWithArrayForDemo($paramsArray[0], $level + 1, $i);
            }
            $string = substr($string, 0, -3);
            $string .= "\r\n";
        }
        $string .= $preSpace . "]";
        return $string;
    }

    /**
     * 获取配置对象格式参数解析后的字符串
     * @author ww
     * @param $paramsObj
     * @param int $level
     * @return string
     */
    private function _getDocStringForWikiWithObject($paramsObj, $level = 0)
    {
        $string = '';
        $preSpace = str_repeat($this->_space, $level);
        $subPreSpace = str_repeat($this->_space, $level + 1);//下级缩进
        $string .= "\r\n";
        $count = $this->_getObjectAttrTotal($paramsObj);
        if ($count > 0) {
            $number = 0;
            foreach ($paramsObj as $fileName => $attr) {
                $number++;
                $string .= $subPreSpace . "\"$fileName\": ";
                $demoValue = is_array($attr->demo) ? $attr->demo[0] : $attr->demo;
                switch ($attr->type) {
                    case null:
                        $string .= 'null';
                        break;
                    case 'float':
                        $string .= number_format($demoValue, 2, '.', '');
                        break;
                    case 'int':
                        $string .= (int)$demoValue;
                        break;
                    case 'bool':
                        $string .= $demoValue ? 'true' : 'false';
                        break;
                    case 'string':
                        $string .= '"' . addslashes($demoValue) . '"';
                        break;
                    case 'object':
                        $string .= '{' . $this->_getDocStringForWikiWithObject($attr->subs, $level + 1) . '}';
                        break;
                    case 'array':
                        $string .= $this->_getDocStringForWikiWithArray($attr->subs, $level + 1);
                        break;
                }
                $endString = ($count == $number) ? null : ',';
                $string .= $endString;
                //$string .= ($attr->type != 'object' && $attr->type != 'array') ? $this->_getCommont($attr) : null;
                $string .= $this->_getCommont($attr);
                $string .= "\r\n";
            }
        }
        $string .= $preSpace;
        return $string;
    }

    /**
     * 获取【输入参数示例及说明、正确返回示例及说明】用字段注释用数据
     * @author ww
     * @param $paramsObj
     * @return string
     */
    private function _getCommont($paramsObj)
    {
        $string = '';
        if (isset($paramsObj->type) || isset($paramsObj->description) || isset($paramsObj->require) || isset($paramsObj->max) || isset($paramsObj->min)) {
            $string .= $this->_space . '//';
            $string .= $paramsObj->type . '型,';
            //$string .= $paramsObj->require ? '必须,' : '';
            $string .= isset($paramsObj->require) && $paramsObj->require ? '必须,' : '';
            if ($paramsObj->type == 'int' && (isset($paramsObj->max) || isset($paramsObj->min))) {
                if (isset($paramsObj->min) && isset($paramsObj->max)) {
                    $string .= '数值范围(' . $paramsObj->min . ' ≤ X ≤ ' . $paramsObj->max . '),';
                }
                if (isset($paramsObj->max) && !isset($paramsObj->min)) {
                    $string .= '数值范围(X ≤ ' . $paramsObj->max . '),';
                }
                if (isset($paramsObj->min) && !isset($paramsObj->max)) {
                    $string .= '数值范围(X ≥ ' . $paramsObj->min . '),';
                }
            }
            if ($paramsObj->type == 'string' && (isset($paramsObj->max) || isset($paramsObj->min))) {
                if (isset($paramsObj->min) && isset($paramsObj->max)) {
                    $string .= '字符个数(' . $paramsObj->min . ' ≤ X ≤ ' . $paramsObj->max . '),';
                }
                if (isset($paramsObj->max) && !isset($paramsObj->min)) {
                    $string .= '字符个数(X ≤ ' . $paramsObj->max . '),';
                }
                if (isset($paramsObj->min) && !isset($paramsObj->max)) {
                    $string .= '字符个数(X ≥ ' . $paramsObj->min . '),';
                }
            }
            if (!is_null($paramsObj->description)) {
                $string .= "【{$paramsObj->description}】,";
            }
        }
        return substr($string, 0, -1);
    }

    /**
     * 获取配置数组格式时，示例值的字符串
     * @author ww
     * @param $paramsObj
     * @param int $level
     * @param $i
     * @return string
     */
    private function _getDocParamsStringWithArrayForDemo($paramsObj, $level = 0, $i)
    {
        $string = '';
        $preSpace = str_repeat($this->_space, $level);
        $subPreSpace = str_repeat($this->_space, $level + 1);//下级缩进
        $string .= $preSpace . "{\r\n";
        $count = $this->_getObjectAttrTotal($paramsObj);
        if ($count > 0) {
            $number = 0;
            foreach ($paramsObj as $fileName => $attr) {
                $number++;
                $string .= $subPreSpace . "\"$fileName\": ";
                $demoValue = is_array($attr->demo) ? $attr->demo[$i] : $attr->demo;
                switch ($attr->type) {
                    case null:
                        $string .= 'null';
                        break;
                    case 'float':
                        $string .= number_format($demoValue, 2, '.', '');
                        break;
                    case 'int':
                        $string .= (int)$demoValue;
                        break;
                    case 'bool':
                        $string .= $demoValue ? 'true' : 'false';
                        break;
                    case 'string':
                        $string .= '"' . addslashes($demoValue) . '"';
                        break;
                    case 'object':
                        $string .= $this->_getDocStringForWikiWithObject($attr->subs, $level + 1);
                        break;
                    case 'array':
                        $string .= $this->_getDocStringForWikiWithArray($attr->subs, $level + 1);
                        break;
                }
                $endString = ($count == $number) ? null : ',';
                $string .= $endString;
                //$string .= ($attr->type != 'object' && $attr->type != 'array') ? $this->_getCommont($attr) : null;
                $string .= $this->_getCommont($attr);
                $string .= "\r\n";
            }
        }
        $string .= $preSpace . "},\r\n";
        return $string;
    }

    /**
     * 获取对象属性个数
     * @author ww
     * @param $object
     * @return int
     */
    private function _getObjectAttrTotal($object)
    {
        $total = 0;
        foreach ($object as $v) {
            $total++;
        }
        return $total;
    }

    /**
     * 创建目录
     * @author ww
     * @param $docPath
     */
    private function _createDocPath($docPath)
    {
        if (!is_dir($docPath)) {
            mkdir($docPath, 0777, true);
        }
    }

}