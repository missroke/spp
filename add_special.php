<?php
/**
 * 添加特殊人群
 * 
 */
require_once 'header.php';
?>
<link rel="stylesheet" href="resource/css/public.css">
		<div class="rightpanel">
			<div class="container">
				<h1 class="ptitle">添加特殊住户</h1>
				<div>
					<ul class="plist">
						<li>
							<span class="pname">姓名:</span>
							<span class="pcontent"><input type="text" name=""></span>
						</li>
						<li>
							<span class="pname">身份证号：</span>
							<span class="pcontent"><input type="text" id="identity" name="" value="" placeholder="15位或18位">
							</span>
						</li>
						<li>
							<span class="pname">手机号：</span>
							<span class="pcontent"><input type="text" id="phone"></span>
						</li>
						<li>
							<span class="pname">类型：</span>
							<span class="pcontent"><input type="text" name="" placeholder="备注"></span>
						</li>
						<input type="button" name="" id="" class="sure" value="提交">
					</ul>
				</div>	



			</div>
		</div>		
	</div>
<?php require_once 'footer.php';?>