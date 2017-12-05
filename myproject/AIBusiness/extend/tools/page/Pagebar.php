<?php
// 分页类
namespace tools\page;

class Pagebar {

    // 分页栏每页显示的页数
    public $rollPage = 5;
    // 页数跳转时要带的参数
    public $parameter  ;
    // 分页URL地址
    public $url     =   '';
    // 默认列表每页显示行数
    public $listRows = 10;
    // 起始行数
    public $firstRow    ;
    // 分页总页面数
    protected $totalPages  ;
    // 总行数
    protected $totalRows  ;
    // 当前页数
    protected $nowPage    ;
    // 分页的栏的总页数
    protected $coolPages   ;
    // 分页显示定制
    protected $config = array('header' => '条记录', 'prev' => '上一页', 'next' => '下一页', 'first' => '第一页', 'last' => '最后一页', 'theme' => ' %totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
    // 默认分页变量名
    protected $varPage;

    protected  $req;

    /**
     * 架构函数
     * @access public
     * @param array $totalRows 总的记录数
     * @param array $listRows 每页显示记录数
     * @param array $parameter 分页跳转的参数
     */
    public function __construct($totalRows,$listRows='',$parameter='',$url='') {

        $request = \think\Request::instance();
        $this->req= $request->param();

        $this->totalRows    =   $totalRows;
        $this->parameter    =   $parameter;
        $this->varPage      =   \think\Config::get('VAR_PAGE') ? \think\Config::get('VAR_PAGE') : 'page' ;
        if(!empty($listRows)) {
            $this->listRows =   intval($listRows);
        }
        $this->totalPages = ceil($this->totalRows / $this->listRows); //总页数
        $this->coolPages    =   ceil($this->totalPages/$this->rollPage);
        $this->nowPage      =   !empty($this->req[$this->varPage])?intval($this->req[$this->varPage]):1;
        if($this->nowPage<1){
            $this->nowPage  =   1;
        }elseif(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
            $this->nowPage  =   $this->totalPages;
        }
        $this->firstRow     =   $this->listRows*($this->nowPage-1);
        if(!empty($url))    $this->url  =   $url;


    }

    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name]    =   $value;
        }
    }

    /**
     * 分页显示输出
     * @access public
     */
    public function show() {
        if(0 == $this->totalRows)
        {
            return '';
        }
        $p=$this->varPage;
        $url = $this->_getBaseUrl($p);
        $pageStr = $this->_getBasePageStr($url);
        $scriptPerpageUrl = str_replace("/page/__PAGE__", '', preg_replace("|/page_size/[0-9]*|", '', str_replace(".html", '', $url)));
        $scriptSpecialPageUrl = str_replace("/page/__PAGE__", '', str_replace(".html", '', $url));
        $pageStr .= <<<EOD
    <script type="text/javascript">
    $(function(){
        $(".pagination-page-list").change(function(){
            var page_size = $(this).val();
            var scriptPerpageUrl = "{$scriptPerpageUrl}";
            var url = scriptPerpageUrl+"/page_size/" + page_size + ".html";
            window.location.href=url;
        })

    });
    </script>
EOD;
        return $pageStr;
    }

    /**
     * 呈现ajax分布的代码
     * @param $element 用于存放列表的DOM容器
     * @return string 分页字符串
     */
    public function showAjax($element)
    {
        if(0 == $this->totalRows) {
            return '';
        }
        $p              =   $this->varPage;
        $url = $this->_getBaseUrl($p);
        $pageStr = $this->_getBasePageStr($url);
        $scriptPerpageUrl = str_replace("/page/__PAGE__", '', preg_replace("|/page_size/[0-9]*|", '', str_replace(".html", '', $url)));
        $scriptSpecialPageUrl = str_replace("/page/__PAGE__", '', str_replace(".html", '', $url));
        $pageStr .= <<<EOD
<script type="text/javascript">
$(function () {
    $(".pagination a").click(function () {
        if($(this).attr("href")) {
            $("#{$element}").load($(this).attr("href"));
        }
        return false;
    });
	$(".pagination-page-list").change(function(){
		var page_size = $(this).val();
		$("#{$element}").load("{$scriptPerpageUrl}/page_size/" + page_size + ".html");
	})
    $(".pagination-num").blur(function () {
        var page = $(this).val();
        $("#{$element}").load("{$scriptSpecialPageUrl}/page/" + page + " .html");
    });
});
</script>
EOD;

        return $pageStr;
    }

    /**
     * 将获取的内容的指定元素$contentElement赋予到当前页面的$element元素中
     * @param $element
     * @param $contentElement
     * @return string
     */
    public function showAjaxByid($element, $contentElement)
    {
        if(0 == $this->totalRows) {
            return '';
        }
        $p              =   $this->varPage;
        $url = $this->_getBaseUrl($p);
        $pageStr = $this->_getBasePageStr($url);
        $scriptPerpageUrl = str_replace("/page/__PAGE__", '', preg_replace("|/page_size/[0-9]*|", '', str_replace(".html", '', $url)));
        $scriptSpecialPageUrl = str_replace("/page/__PAGE__", '', str_replace(".html", '', $url));
        $pageStr .= <<<EOD
<script type="text/javascript">
$(function () {
    $(".pagination a").click(function () {
        if($(this).attr("href")) {
            $("#{$element}").load($(this).attr("href") + " #{$contentElement}");
        }
        return false;
    });
	$(".pagination-page-list").change(function(){
		var page_size = $(this).val();
		$("#{$element}").load("{$scriptPerpageUrl}/page_size/" + page_size + ".html #{$contentElement}");
	})
    $(".pagination-num").blur(function () {
        var page = $(this).val();
        $("#{$element}").load("{$scriptSpecialPageUrl}/page/" + page + ".html #{$contentElement}");
    });
});
</script>
EOD;

        return $pageStr;
    }

    /**
     * @param $p
     * @return mixed|string
     */
    private function _getBaseUrl($p)
    {
        if ($this->url) {
            $depr = \think\Config::get('URL_PATHINFO_DEPR');
            $url = rtrim(\think\Url::build('/' . $this->url, '', false), $depr) . $depr . '__PAGE__';
        } else {
            if ($this->parameter && is_string($this->parameter)) {
                parse_str($this->parameter, $parameter);
            } elseif (is_array($this->parameter)) {
                $parameter = $this->parameter;
            } elseif (empty($this->parameter)) {
                unset($this->req[\think\Config::get('VAR_URL_PARAMS')]);
                $var = !empty($this->req) ? $this->req : $this->req;
                if (empty($var)) {
                    $parameter = array();
                } else {
                    $parameter = $var;
                }
            }
            $parameter[$p] = '__PAGE__';
            $parameter['page_size'] = '__PAGESIZE__';
            $url = \think\Url::build('', $parameter,false,false);

        }
        //处理+号变空格问题
        $url=str_replace('+','%20',$url);

        $url = str_replace('__PAGESIZE__', $this->listRows, $url);
        return $url;
    }

    /**
     * @param $url
     * @return string
     */
    private function _getBasePageStr($url)
    {
        $firstRow = '<a id="" group="" alert="首页" title="首页" class="l-btn l-btn-plain l-btn-disabled l-btn-plain-disabled" href="' . str_replace('__PAGE__', 1, $url) . '"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty pagination-first">首页</span></span></span></a>';
        $lastRow = '<a id="" group="" alert="尾页" title="尾页" class="l-btn l-btn-plain l-btn-disabled l-btn-plain-disabled" href="' . str_replace('__PAGE__', $this->totalPages, $url) . '"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty pagination-last">尾页</span></span></span></a>';

        $perPage = array('5' => '','10' => '', '20' => '', '30' => '', '50' => '');
        $perPage[$this->listRows] = ' selected="selected"';
        $str = '<select class=\'pagination-page-list\' >';
        foreach($perPage as $k=>$v){
            $str .= "<option".$v." >$k</option>";

        }
        $str .="</select>";

        $upRow = $this->nowPage - 1;
        $downRow = $this->nowPage + 1;
        if ($upRow > 0) {
            $upPage = '<a id="" group="" alert="上一页" title="上一页" class="l-btn l-btn-plain l-btn-disabled l-btn-plain-disabled" href="' . str_replace('__PAGE__', $upRow, $url) . '"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty pagination-prev">上一页</span></span></span></a>';
        } else {
            $upPage = '<a  class="l-btn l-btn-plain l-btn-disabled l-btn-plain-disabled"><span class="l-btn-left"><span class="l-btn-text"><span style="text-align: center;" class="l-btn-empty">上一页</span></span></span></a>';
        }

        if ($downRow <= $this->totalPages) {
            $downPage = '<a id="" group="" alert="下一页" title="下一页" class="l-btn l-btn-plain l-btn-disabled l-btn-plain-disabled" href="' . str_replace('__PAGE__', $downRow, $url) . '"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty pagination-next">下一页</span></span></span></a>';
        } else {
            $downPage = '<a class="l-btn l-btn-plain l-btn-disabled l-btn-plain-disabled"><span class="l-btn-left"><span class="l-btn-text"><span style="text-align: center;" class="l-btn-empty pagination-next">下一页</span></span></span></a>';
        }
        $start = $this->totalRows > 0 ? ($this->nowPage - 1) * $this->listRows + 1 : 0;
        $end = $this->totalRows > 0 ? ($this->totalRows < $this->nowPage * $this->listRows ? $this->totalRows : $this->nowPage * $this->listRows) : 0;
        $pageStr = <<<EOD
<div class=" pagination" data-options="showRefresh:true">
    <ul>

                <li>
                    {$upPage}
                </li>

                <li>
                    <span class="font">{$this->nowPage}/{$this->totalPages}</span>
                </li>
                <li>
                    {$downPage}
                </li>
            </ul>
    <div style="line-height:22px;" class="pagination-info">显示 {$start} 到 {$end},共 {$this->totalRows} 记录   每页{$str}条</div>
    <div style="clear:both;"></div>
</div>
EOD;
        //if($this->totalRows > 10){
        if($this->totalRows > $this->listRows){
            return $pageStr;
        }else{
            return '';
        }

    }

}
