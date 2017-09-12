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
					<p class="household">出租户详细信息</p>
					<ul class="plist">
						<li>
							<span class="pname">出租屋名称：</span>
							<span class="pcontent"><input type="text" value="1区1幢"></span>
						</li>
						<li>
							<span class="pname">房屋属性：</span>
							<span class="pcontent">
							<select name="房屋属性" id="" value="" style="width: 195px;height: 25px;margin-top: 6px;text-align: center;border:1px solid #f1f1f1" required>
								<option value="">公租房</option>
								<option value="">安置房</option>
								<option value="">廉租房</option>
								<option value="">单位宿舍</option>
							</select></span>
						</li>
						<li>
							<span class="pname">租房数量：</span>
							<span class="pcontent"><input type="text" value="24"></span>
						</li>
						<li>
							<span class="pname">房间租客限制：</span>
							<span class="pcontent"><input type="text" value="5"></span>
						</li>
						<li class="gridr">
							<span class="pname">总人口数：</span>
							<span class="pcontent">100</span>
						</li>
						<li class="gridr">
							<span class="pname">门禁数：</span>
							<span class="pcontent">2</span>
						</li>
						<a class="sure" href="lessorhousehold.html">提交</a>
						<a class="sure" href="lessorhousehold.html">返回</a>
					</ul>
				</div>
            </div>
		</div>
	</div>
<?php require_once 'footer.php';?> 