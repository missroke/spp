<?php
/**
 * 出租屋流动人口管理平台登录
 * 
 */
if(isset($_SESSION)){
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resource/css/base.css">
    <link rel="stylesheet" type="text/css" href="resource/css/login.css">
    <link rel="stylesheet" type="text/css" href="resource/css/iconfont.css">
    <title>登录</title>
</head>
<style>
  html,body{
    width: 100%;
    height: 100%;
    background-color: #00aece;
  }
  .end{}
</style>
<body>
<!-- 设计稿1200px   内容区900px-->
<div class="container">
<!-- 表单部分  登录-->
    <div class="content">
        <form id="login-form" method="post" action="">
            <h2>登录</h2>
            <div class="icon"><i class="iconfont icon-gerenzhongxinxia"></i><input type="text" name="username" id="username" onblur="chkname()" placeholder="请输入用户名"></div>
            <div class="icon"><i class="iconfont icon-mima"></i><input type="password" name="password" id="password" onblur="chkpswd()" placeholder="请输入密码"></div>                  
            <a href="main.php"><span id="validate">登录</span></a>
        </form>
    </div>
<!-- 版权问题  开始 -->
<div class="login-copy">
<p>Copyright &nbsp;&nbsp;&nbsp;(&copy;浙ICP备14029951号-1)&nbsp;&nbsp;杭州咚咚信息技术有限公司</p>
 
</div>    
<!-- 版权问题  结束 -->    
</div>
</body>
<script type="text/javascript">
        // 添加键盘事件
        $('#username,#password').keypress(function(e) {
                var theEvent = window.event || e;
                var code = theEvent.keyCode || theEvent.which;
                if (code == 13) {
                $("#validate").click();
                }
                });
        $("#validate").click(function(){
            if(validate()){
                $("#login-form").submit();
            }else{
                return false;
            }
        });
        function validate(){
            var username = $("#username").val;
            var password = $("#password").val;
            if ($.trim(username) === "") {
                showTip("用户名不能为空");
                $("#username").focus();
                return false;
            }
            if(!checkName($.trim(username)) || (/ /g).test($.trim(username))){
                showTip("非法输入");
                $("#username").focus();
                return false;                
            }
            if($.trim(username) !== "" && $.trim(password) ===""){
                showTip("密码不能为空");
                $("#password").focus();
                return false;
            }
            return true;
        }
        function showTip(){
            $('#tip').html(data).show();
        }
        function hideTip(){
            $('#tip').hide();
        }
        function checkName(name){
            var i,j,strTemp;
            strTemp="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_";
            for (i=0;i<id.length;i++)
            {
                j=strTemp.indexOf(id.charAt(i)); 
                if (j==-1)
                {
                    return 0;
                }
            }
            return 1;
        }          
</script>
</html>