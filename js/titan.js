var progressJob;

function feechCommentsAjax(){
    $.get("doGbook.php?action=q",function(data,status){
        if(status=="success"){
            feechComments(data);
        }
      });
}
function feechComments(commentsReturn){
    var returnObj = JSON.parse(commentsReturn);
    $("#gbookArea").html("");
    for(now in returnObj.result){
        $("#gbookArea").append("<div class='panel panel-info'><div class='panel-heading'><h3 class='panel-title'>"+returnObj.result[now]['username']+"</h3><h3 class='panel-title' style='text-align:right'>"+"</h3></div><div class='panel-body'>"+returnObj.result[now]['comment']+"</div><div class='panel-footer'>发表于 "+returnObj.result[now]['time']+"</div></div>");
    }
    $("#progressCom").css("width", "100%");
    $("#progressCom").addClass("progress-bar-success");
    setTimeout("$(\"#loading\").hide();$(\"#gbookArea\").fadeIn();",500);
}
function doProgress(num){
    var width=parseInt(document.getElementById("progressCom").style.width);
    if(width>=80 && width<99){
        clearInterval(progressJob);
        progressJob=setInterval("doProgress(1)",500);
    }else if(width==99){
        clearInterval(progressJob);
    }
    $("#progressCom").css("width", width+num+"%");
}
function doComment(){
    var username=$("#username").val();
    var mail=$("#mail").val();
    var comment=$("#content").val();
    var comment=$("<div>").text(comment).html();
    var regBox = {
        regEmail: /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/,
        regName: /^[a-zA-Z0-9_-]{3,16}$/,
        regMobile: /^[1]([3-9])[0-9]{9}$/,
    }
    var code=$("#vcode").val();
    var mailflag = regBox.regEmail.test(mail);
    var nameflag = regBox.regName.test(username);
    if (!nameflag) {
        alert("昵称有误，请重新检查输入！");
        return;
    }
    else if (!mailflag) {
        alert("邮箱格式有误，请重新检查输入！");
        return;
    }else if(comment == ''){
        alert("请输入留言内容！")
    }
    document.getElementById("commentBtn").disabled="disabled";
    document.getElementById("commentBtn").onclick="";
    var createData={
        username:username,
        mail:mail,
        comment:comment,
        vcode:code,
    }
    $.post("doGbook.php?action=c",
    createData,
    function(data,status){
        if(status=="success"){
            if(data=="OK"){
                $("#sendGbook input").val("");
                $("#content").val("");
                feechCommentsAjax();
                $("#commentSuccess").show();
            }else if(data=="ERROR"){
                alert("未知错误，请重试！")
            }else if(data="ErrorCode"){
                alert("验证码正确，请重试！");
                $('#vcode').val("");
                document.getElementById("captcha").click();
            }
            $("#commentBtn").attr("onclick", "doComment()");
            $('#commentBtn').removeAttr('disabled');
        }
    });

}
$(document).ready(function () {
      feechCommentsAjax();
      progressJob=setInterval("doProgress(5)",100);
});

