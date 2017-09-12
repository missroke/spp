<?php
/**
 * 续租记录
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" href="resource/css/other.css">
		<div class="rightpanel">
			<div class="container">
				<div>
					<p class="currenta">续租租客信息</p>
					<ul class="operat">
	                    <li class="lf timesearch">开始时间：
	                        <div class="iDate date">
	                            <input type="text" class="profits" placeholder="选择开始日期">
	                            <button type="button" class="addOn"></button>
	                        </div>
	                    </li>
	                    <li class="lf timesearch">结束时间：
	                        <div class="iDate date">
	                            <input type="text" class="profite" placeholder="选择结束日期">
	                             <button type="button" class="addOn"></button>
	                        </div>
	                    </li>
	                    <li class='rf searchbox'>
	                        <input type="text">
	                        <span class="search">搜索</span>
	                    </li>
	                </ul>
	                <ul class="operatlist">
	                	<li>1. XX村YYYY户续租租客2人</li>
	                	<li>2. XX村YYYY户续租租客2人</li>
	                	<li>3. XX村YYYY户续租租客2人</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
<?php require_once 'footer.php';?> 