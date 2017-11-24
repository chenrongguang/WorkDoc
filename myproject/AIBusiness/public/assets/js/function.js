/**
 * Created by jiangxijun on 2016/9/27.
 */
var base_url;//datatables对象
var list_method_name;//datatables对象
var list_params = {};//datatables对象
var list_column;//datatables对象
var table;//datatables对象
var json_data;//php解析的
var win_obj;//窗口对象
if (top != self) {
    win_obj = window.top;
} else {
    win_obj = window;
}
/**
 * 内部调用的提示
 * @param info
 * @param icon
 * @private
 */
function _tips(info, icon) {
    if ($.inArray(icon, [0, 1, 2, 3, 4, 5, 6]) > -1) {
        win_obj.layer.msg(info, {
            shade: [0.8, '#393D49'],
            icon: icon,
            time: 2000 //2秒关闭（如果不配置，默认是3秒）
        }, function () {

        });
    } else {
        win_obj.layer.msg('function.js中的icon非法', {
            shade: [0.8, '#393D49'],
            icon: 2,
            time: 2000 //2秒关闭（如果不配置，默认是3秒）
        }, function () {

        });
    }
}

/**
 * 提示
 * @param info
 */
function alerts(info) {
    _tips(info, 0);
}

/**
 * 提示-失败
 * @param info
 */
function error(info) {
    _tips(info, 2);
}

/**
 * 提示-成功
 * @param info
 */
function success(info) {
    _tips(info, 1);
}

/**
 * 询问
 * @param info
 * @param callback
 */
function confirm(info, callback) {
    win_obj.layer.confirm(info + '?', {icon: 3, title: '提示'}, function (index) {
        callback(index);
        win_obj.layer.close(index);
    });
}

function prompt(info, callback) {
    // win_obj.layer.prompt(function(value, index, elem){
    //     alert(value); //得到value
    //     layer.close(index);
    // });
    // win_obj.layer.prompt({
    //     title: '退单理由',
    //     formType: 2 //prompt风格，支持0-2
    // }, function(pass){
    win_obj.layer.prompt({title: info, formType: 2}, function (value, index) {
        // layer.msg('退单理由：'+ text);
        callback(value);
        win_obj.layer.close(index);
    });
    // });
}

/**
 * 自定义弹出框
 * @param title
 * @param content
 * @param callback
 * @param btn
 */
function open(title, content, yes_callback, btn) {
    win_obj.layer.open({
        title: title || "",
        btn: btn || ['确定', '取消'],
        content: content || "",
        yes: function (index, layero) {
            yes_callback();
        }, btn2: function (index, layero) {
            win_obj.layer.close(index);
        }
    });
}
/**
 * 数量四舍五入
 * @param x
 */
function toDecimal(x) {
    var f = parseFloat(x);
    if (isNaN(f)) {
        return false;
    }
    var f = Math.round(x * 100) / 100;
    var s = f.toString();
    var rs = s.indexOf('.');
    if (rs < 0) {
        rs = s.length;
        s += '.';
    }
    while (s.length <= rs + 2) {
        s += '0';
    }
    return s;
}
function toDecimalToOms(x) {
    x=x/100;
    var f = parseFloat(x);
    if (isNaN(f)) {
        return false;
    }
    var f = Math.round(x * 100) / 100;
    var s = f.toString();
    var rs = s.indexOf('.');
    if (rs < 0) {
        rs = s.length;
        s += '.';
    }
    while (s.length <= rs + 2) {
        s += '0';
    }
    return s;
}

/**
 * 删除数值
 * @param arr
 */
function clear_values(arr) {
    $.each(arr, function (index, value) {
        $("#" + value).val('');
    });
}

/**
 * 设置参数
 * @param key
 * @param value
 */
function set_param(type, key, value) {
    if ('string' == type) {
        if ((key != '' && key != undefined && key != null) && (value != '' && value != undefined && value != null)) {
            eval("list_params." + key + "='" + value + "'");
        } else if (value == undefined && value == null) {
            eval("list_params." + key + "='" + $("#" + key).val() + "'");
        } else if ('' == value) {
            eval("delete(list_params." + key + ")");
        }
    } else if ('int' == type) {
        if ((key != '' && key != undefined && key != null) && (value != '' && value != undefined && value != null)) {
            if (isNaN(parseInt(value))) {
                error('int类型赋值错误');
            }
            eval("list_params." + key + "=" + parseInt(value));
        } else if (value == '0') {
            eval("list_params." + key + "=0");
        }
        else if (value == undefined || value == null) {
            eval("list_params." + key + "=" + parseInt($("#" + key).val()));
        }
        else if ('' == value) {
            eval("delete(list_params." + key + ")");
        }
    } else {
        error('set_param类型错误');
    }
}
/**
 * 清空参数
 */
function clear_params() {
    list_params = {};
}

/**
 * 获取接口完整url
 * @param method
 * @returns {string}
 */
function get_api_url(method) {
    return base_url + 'api.php?method=' + method;
}

/**
 * 校验权限
 * @param name
 * @returns {boolean}
 */
function check_auth(name) {
    if ($.inArray(name, json_data.data.auth_list) > -1) {
        return true;
    } else {
        return false;
    }
}

/**
 * 共通方法-调用接口
 * @author jiangxijun
 * @param method
 * @param params
 * @param callback
 */
function get_ajax_data(method, params, callback) {
    $.ajax({
        type: "post",
        url: get_api_url(method),
        cache: false,  //禁用缓存
        contentType: "application/json;charset=utf-8",
        data: JSON.stringify(params),  //传入组装的参数
        dataType: "json",
        success: function (result) {
            if (0 == result.code) {
                if (typeof callback === "function") {
                    callback(result.data);
                }
            } else {
                error(method + '_' + result.code + '_' + result.message);
                return false;
            }
        }
    });
}


/**
 * 全选
 * @author jiangxijun
 */
function clickAll() {
    $(".checkOne").prop("checked", $(".checkAll").prop("checked"));
}

/**
 * 全选之单选
 * @author jiangxijun
 */
function clickOne() {
    var allChecked = true;
    $(".checkOne").each(function () {
        if ($(this).prop("checked") == false) {
            allChecked = false;
        }
    });
    if (allChecked) {
        $(".checkAll").prop("checked", true);
    } else {
        $(".checkAll").prop("checked", false);
    }
}


/**
 * 生成表格
 */
function create_datatables(table_id) {
    //插件语言配置
    var lang = {
        "sProcessing": "处理中...",
        "sLengthMenu": "每页 _MENU_ 项",
        "sZeroRecords": "没有匹配结果",
        "sInfo": "当前显示第 _START_ 至 _END_ 项，共 _TOTAL_ 项。",
        "sInfoEmpty": "当前显示第 0 至 0 项，共 0 项",
        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
        "sInfoPostFix": "",
        "sSearch": "搜索:",
        "sUrl": "",
        "sEmptyTable": "无符合查询条件的数据",
        "sLoadingRecords": "载入中...",
        "sInfoThousands": ",",
        "oPaginate": {
            "sFirst": "首页",
            "sPrevious": "上页",
            "sNext": "下页",
            "sLast": "末页",
            "sJump": "跳转"
        },
        "oAria": {
            "sSortAscending": ": 以升序排列此列",
            "sSortDescending": ": 以降序排列此列"
        }
    };
    table = $("#" + table_id).dataTable({
        language: lang,  //提示信息
        ordering: false,  //禁用排序
        autoWidth: false,  //禁用自动调整列宽
        stripeClasses: ["odd", "even"],  //为奇偶行加上样式，兼容不支持CSS伪类的场合
        processing: true,  //隐藏加载提示,自行处理
        serverSide: true,  //启用服务器端分页
        searching: false,  //禁用原生搜索
        orderMulti: false,  //启用多列排序
        order: [],  //取消默认排序查询,否则复选框一列会出现小箭头
        renderer: "bootstrap",  //渲染样式：Bootstrap和jquery-ui
        pagingType: "full_numbers",  //分页样式：simple,simple_numbers,full,full_numbers
        pageLength: 10,//默认每页条数
        lengthMenu: [
            [ 10, 25, 50],
            [ '10', '25', '50']
        ],
        columnDefs: [{
            "targets": 'nosort',  //列的样式名
            "orderable": false    //包含上样式名‘nosort’的禁止排序
        }],
        dom: 'rt<"bottom" <"fl" l><"fr" p><"fr" i>><"clear">',
        buttons: [],
        ajax: retrieveData,
        //列表表头字段
        columns: list_column
    }).api();

    /**
     * @author jiangxijun
     * @date   20160923
     * @param data
     * @param callback
     * @param settings
     */
    function retrieveData(data, callback, settings) {
        //声明参数
        var system_param = {};
        if (data.order.length > 0) {
            //有排序
            system_param.order = data.columns[data.order[0]['column']]['data'] + " " + data.order[0]['dir'];
        }
        system_param.page_size = data.length;
        system_param.page_index = (data.start / data.length) + 1;
        var all_params = $.extend(list_params, system_param);
        get_ajax_data(list_method_name, all_params, function (result) {
            var returnData = {};
            returnData.draw = data.draw;
            returnData.recordsTotal = result.rows_total;//返回数据记录
            returnData.recordsFiltered = result.rows_total;
            returnData.data = result.list;//返回的数据列表
            callback(returnData);
        });
    }

    return table;
}

function getUrlParamById(name) {
    var url = location.search; //获取url中"?"符后的字串
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        strs = str.split("&");
        for (var i = 0; i < strs.length; i++) {
            theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
        }
    }
    return theRequest[name];
}

/**
 * 导出excel
 * @param header
 * @param body
 * @param filename
 * @returns {boolean}
 */
function export_excel(header, body, filename) {
    var export_excel = {};
    if ('' == header || undefined == header || '' == body || undefined == body || '' == filename || undefined == filename) {
        alerts('导出参数错误');
        return false;
    }
    //1.处理头部
    export_excel.export_header = '';//整个header
    export_excel.header_tds = '';//header的单元格部分
    export_excel._fields = [];
    export_excel.header_tds += '<th>序号</th>';
    for (var i = 0, l = header.length; i < l; i++) {
        export_excel._fields[i] = header[i].field_key;
        export_excel.header_tds += "<th>" + header[i].field_value + '</th>';
    }
    export_excel.export_header = '<tr>' + export_excel.header_tds + '</tr>';
    //2.处理数据
    export_excel.body = '';//整个body
    for (var i = 0; i < body.length; i++) {
        export_excel.body_tds = '';//body的单元格部分
        for (var j = 0; j < export_excel._fields.length; j++) {
            var _field = export_excel._fields[j];
            var value = body[i][_field];
            export_excel.body_tds += '<td>' + value + '</td>';
        }
        export_excel.body += '<tr><td>' + (i + 1) + '</td>' + export_excel.body_tds + '</tr>';
    }
    export_excel.html = '<table border="1"><thead>' + export_excel.export_header + '</thead><tbody>' + export_excel.body + '</tbody></table>';
    export_excel.rand = Math.floor(Math.random() * 1000);//随机数
    var excelFile = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'>";
    excelFile += '<meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">';
    excelFile += '<meta http-equiv="content-type" content="application/vnd.ms-excel';
    excelFile += '; charset=UTF-8">';
    excelFile += "<head>";
    excelFile += "<!--[if gte mso 9]>";
    excelFile += "<xml>";
    excelFile += "<x:ExcelWorkbook>";
    excelFile += "<x:ExcelWorksheets>";
    excelFile += "<x:ExcelWorksheet>";
    excelFile += "<x:Name>";
    excelFile += "wsmtec_" + export_excel.rand;
    excelFile += "</x:Name>";
    excelFile += "<x:WorksheetOptions>";
    excelFile += "<x:DisplayGridlines/>";
    excelFile += "</x:WorksheetOptions>";
    excelFile += "</x:ExcelWorksheet>";
    excelFile += "</x:ExcelWorksheets>";
    excelFile += "</x:ExcelWorkbook>";
    excelFile += "</xml>";
    excelFile += "<![endif]-->";
    excelFile += "</head>";
    excelFile += "<body>";
    excelFile += export_excel.html;
    excelFile += "</body>";
    excelFile += "</html>";
    var uri = 'data:application/vnd.ms-excel;charset=utf-8,' + encodeURIComponent(excelFile);
    var link = document.createElement("a");
    link.href = uri;
    link.style = "visibility:hidden";
    link.download = filename + '_' + export_excel.rand + ".xls";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}