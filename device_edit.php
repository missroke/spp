<?php
/**
 * 设备信息编辑
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>

	<link rel="stylesheet" type="text/css" href="resource/css/public.css">
			<div class="rightpanel">
			<div class="container">
				<div class="warp">
					<p class="household">门禁详细信息</p>
					<ul class="plist">
						<li>
							<span class="pname">门禁名称：</span>
							<span class="pcontent"><input type="text" value="1区1幢"></span>
						</li>
						<li>
							<span class="pname">门禁属性：</span>
							<span class="pcontent">
							<select name="房屋属性" id="" value="" style="width: 195px;height: 25px;margin-top: 6px;text-align: center;border:1px solid #f1f1f1" required>
								<option value="">整租</option>
								<option value="">集体宿舍</option>
							</select></span>
						</li>
						<li>
							<span class="pname">门禁数量：</span>
							<span class="pcontent"><input type="text" value="24"></span>
						</li>
						<li>
							<span class="pname">门禁租客限制：</span>
							<span class="pcontent"><input type="text" value="5"></span>
						</li>
						<li class="gridr">
							<span class="pname">总人口数：</span>
							<span class="pcontent"><input type="text" disabled="disabled" name="" value="10"></span>
						</li>
						<li class="gridr">
							<span class="pname">门禁数：</span>
							<span class="pcontent"><input type="text" name="" disabled="disabled" value="2"></span>
						</li>
						<button class="sure" id="">提交</button>
						<button class="sure" id="">返回</button>
					</ul>
				</div>
            </div>
		</div>
	</div>
<?php require_once 'footer.php';?> 