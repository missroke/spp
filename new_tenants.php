<?php
/**
 * 新增记录
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" href="resource/css/other.css">
		<div class="rightpanel">
			<div class="container">
				<div>
					<p class="currenta">新增租客信息</p>
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
	                    <span class="search">搜索</span>
<!-- 	                    <li class='rf searchbox'>
	                        <input type="text">
	                        
	                    </li> -->
	                </ul>
	                <ul class="operatlist">
	                	<li>1. 西湖区XX街道AA社区宋江村1幢1单元新增租客5人</li>
	                	<li>2. 西湖区XX街道AA社区宋江村1幢1单元新增租客25人</li>
	                	<li>3. 西湖区XX街道AA社区宋江村1幢1单元新增租客45人</li>
	                </ul>
				</div>
			</div>
		</div>
<script type="text/javascript" src="resource/js/moment.js"></script>
<script type="text/javascript" src="resource/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        if($(".iDate.date").length>0){
            $(".iDate.date").datetimepicker({
                locale:"zh-cn",
                format:"YYYY-MM-DD",
                dayViewHeaderFormat:"YYYY年 MMMM"
            });
        }
    })
</script>
<?php require_once 'footer.php';?>


