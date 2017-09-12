<?php
/**
 * 添加卡号
 * 
 */
require_once 'header.php';
?>
<link rel="stylesheet" href="resource/css/public.css">
		<div class="rightpanel">
			<div class="container">
				<h1 class="ptitle">添加卡号</h1>
				<div>
					<ul class="plist">
						<li>
							<span class="pname">卡号:</span>
							<span class="pcontent"><input type="text" name=""></span>
						</li>
						<li>
							<span class="pname">卡类型：</span>
							<span class="pcontent">
								<select id="" name="" required>
									<option value="">选择卡类型...</option>
									<option value="">授权卡</option>
									<option value="">巡更卡</option>
									<option value="">普通卡</option>
								</select>
							</span>
						</li>
						<input type="button" name="" id="" class="sure" value="提交">
					</ul>
				</div>	



			</div>
		</div>		
	</div>
<?php require_once 'footer.php';?>