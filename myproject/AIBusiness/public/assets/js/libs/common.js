
/**
 * Created by Chenrongguang on 2016-8-28.
 */
/*全选*/
//checkbox全选按钮---标签必须（class="checkAll" onclick="clickAll()"）
function clickAll() {
    $(".checkOne").prop("checked", $(".checkAll").prop("checked"));
}


//checkbox单个按钮---标签必须（class="checkOne" onclick="clickOne()"）
function clickOne() {
    var allChecked = true;
    $(".checkOne").each(function() {
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


function sub(showmessflag)
{
    //检查和校验处理
    //if(false== validate_handle()){
    if(false== validation()){
        return;
    }

    subform(showmessflag);
}

//提交
function subform(showmessflag){

    var ajax_info = {
        success: function(data){
            return_handle(data,showmessflag);
        },
        resetForm: false,
        dataType: 'json'
    };

    $("#form").ajaxSubmit(ajax_info);
}

//处理返回
function return_handle(data,showmessflag)
{
    if(data.result=='SUCCESS'){
        //如果需要先显示消息,则先显示消息之后跳转
        if (showmessflag ==1){
            alerts(data.msg);
        }
        location.href= data.return_data.url;
    }
    else{
        alerts(data.msg);
    }

}

