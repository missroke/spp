<?php
/**
 * 个人中心
 */
require_once 'header.php';
?>
	<link rel="stylesheet" type="text/css" href="resource/css/public.css">
			<div class="rightpanel">
			<div class="container">
				<div class="warp">
					<p class="household">修改个人信息</p>
					<ul class="plist">
					<li>
						<span class="pname">用户名称：</span>
						<span class="pcontent"><input type="text" name="" id="uername" value=""></span>					
					</li>
					<li>
						<span class="pname">账号：</span>
						<span class="pcontent"><input type="text" name="account" id="account" value="" ></span>
					</li>
					<li>
						<span class="pname">密码：</span>
						<span class="pcontent"><input type="text" name="pswd" id="pswd" value=""></span>
					</li>
					<li>
						<span class="pname">确认密码：</span>
						<span class="pcontent"><input type="text" name="repswd" id="repswd" value=""></span>
					</li>
					<li>
						<span class="pname">联系方式：</span>
						<span class="pcontent"><input type="text" name="phone" id="phone" value=""></span>
					</li>
					<li>
						<span class="pname">身份证：</span>
						<span class="pcontent"><input type="text" name="identity" id="identity" value=""></span>
					</li>
					<li>
						<span class="pname">管辖区域：</span>
						<span class="pcontent"><button class="select">查看</button></span>
					</li>
						<a class="sure" href="">提交</a>
					</ul>
				</div>
            </div>
		</div>
	</div>
<?php require_once 'footer.php';?> 
