<?php
/**
 * 出租户详细信息查看与编辑
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
	<link rel="stylesheet" type="text/css" href="resource/css/public.css">
		<div class="rightpanel">
			<div class="container">
				<div class="warp">
					<p class="household">人口详细信息</p>
					<ul class="plist">
						<li  class="gridr">
							<span class="pname">姓名：</span>
							<span class="pcontent">迪丽热巴</span>
						</li>
						<li  class="gridr">
							<span class="pname">手机号：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="">
						</li>
						<li  class="gridr">
							<span class="pname">身份证号：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value=""></span>
						</li>
						<li  class="gridr">
							<span class="pname">卡号：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="">
						</li>
						<li class="gridr">
							<span class="pname">租住房屋：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="">
						</li>
						<li class="gridr">
							<span class="pname">房号：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="">
						</li>
						<li class="gridr">
							<span class="pname">个人属性：</span>
							<span class="pcontent">
							<select name="房屋属性" id="" value="" style="width: 195px;height: 25px;margin-top: 6px;text-align: center;border:1px solid #f1f1f1" required>
								<option value="">普通住户</option>
								<option value="">特殊住户</option>

							</select>
						    </span>
						</li>
						<li class="gridr">
							<span class="pname">个人类型：</span>
							<span class="pcontent">
							<select name="房屋属性" id="" value="" style="width: 195px;height: 25px;margin-top: 6px;text-align: center;border:1px solid #f1f1f1" required>
								<option value="">房东</option>
								<option value="">流动人口</option>
								<option value="">常住人口</option>
							</select>
							</span>
						</li>
						<li class="gridr">
							<span class="pname">租期：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="">
						</li>
						<li class="gridr">
							<span class="pname">录入时间：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="">
						</li>
						<li class="gridr">
							<span class="pname">所属设备：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="">
						</li>
						<a class="sure" href="" id="return">返回</a>
						<a class="sure" href="" id="submit">提交</a>	
					</ul>
				</div>
				<div class="headpic"><img src="resource/images/headpic.png" alt="图片"></div>
            </div>
		</div>
	</div>
	<script type="text/javascript">
		$("a.sure").hover(function(){
		$(this).css("background-color","");
		});
		$(document).ready(function(){
			$("#return").click(function(){

			});
		});

	</script>