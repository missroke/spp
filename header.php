<?php
/**
 * 头部（退出）
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>门禁平台系统</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<meta name="Description" content="出租屋流动人口管理平台">
	<meta name="KeyWords" content="咚咚技术">	
	<link rel="stylesheet" href="resource/css/base.css">
	<link rel="stylesheet" type="text/css" href="resource/css/styles.css">
	<link rel="stylesheet" href="resource/css/iconfont.css">
	<link rel="stylesheet" href="resource/css/index.css">
</head>
<body>
	<div class="nav">
		<div class="navcontent">
			<a href="personal_edit.php" >
				<div class="lf greet" id="tips">
					<i class="iconfont icon-jingcha" id="editorinfo"></i>
					<b>欢迎您，</b>
					<span>xxxx</span>
				</div>			
			</a>
			<ul class="topnav lf"> 
				<li class="yiji">
					<a href="histogram.php">实时信息</a>
					<ul class="erji">
						<li><a href="new_tenants.php">新增租客信息</a></li>
						<li><a href="continue_tenants.php">续租租客信息</a></li>
						<li><a href="logout_tenants.php">注销租客信息</a></li>
					</ul>
				</li>
				<li class="yiji"><a href="house_gridding.php">出租屋网格管理</a></li>
				<li class="yiji"><a href="population_change.php">出租户人口管理</a></li>
				<li class="yiji">
					<a href="javascript:void(0);">通行记录</a>
					<ul class="erji">
						<li><a href="alarm_record.php">报警记录</a></li>
						<li><a href="opening_record.php">开门记录息</a></li>
						<li><a href="special_record.php">特殊住户记录</a></li>
					</ul>
				</li>
				<li class="yiji"><a href="main.php">公安系统管理</a></li>
				<li class="yiji"><a href="patrol_manage.php">巡更管理</a></li>
				<li class="yiji"><a href="device_manage.php">设备管理</a></li>
				<li class="yiji">
					<a href="javascript:void(0);">系统配置</a>
					<ul class="erji">
						<li><a href="device_list.php">设备配置</a></li>
						<li><a href="card_list.php">卡号管理</a></li>
						<li><a href="special_manage.php">特殊人群配置</a></li>
					</ul>
				</li>
			</ul> 
			<div class="loginout rf">
                <a href="login.php" id="loginout"><i class="iconfont icon-tuichu-copy"></i></a>
            </div>
		</div>		
	</div>
<script type="text/javascript" src="resource/js/jquery-1.4.4.min.js"></script>
<script src="resource/js/jquery.treemenu.js"></script>
<script src="resource/js/index.js"></script>
<script type="text/javascript" src="resource/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="resource/js/layer/layer.js"></script>
<script type="text/javascript" src="resource/js/moment.js"></script>
<script type="text/javascript" src="resource/js/bootstrap-datetimepicker.js"></script>
<script>
    $(document).ready(function(){
        if($(".iDate.date").length>0){
            $(".iDate.date").datetimepicker({
                locale:"zh-cn",
                format:"YYYY-MM-DD",
                dayViewHeaderFormat:"YYYY年 MMMM"
            });
        }
    });
    $("#editorinfo").click(function(){
    	/*alert(2)*/
    	$(".piceditor").toggleClass("headpicactive")
    });
    $("#tips").mouseenter(function(){
    	layer.tips('嗨，点击我修改个人信息', '#tips');
    });
    $("#loginout").mouseenter(function(){
    	layer.tips('退出',"#loginout",{tips:3});
    });
</script>	