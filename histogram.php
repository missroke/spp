<?php
/**
 * 实时信息-柱状图
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" href="resource/css/other.css">
		<div class="rightpanel">
			<div class="container">
				<div>
					<p class="currenta"></p>
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
	               <div id="current" style="margin-left:30px;"></div>
				</div>
			</div>
		</div>
	</div>
<script src="https://img.hcharts.cn/highcharts/highcharts.js"></script>
<script src="https://img.hcharts.cn/highcharts/highcharts-3d.js"></script>
<script src="https://img.hcharts.cn/highcharts/modules/exporting.js"></script>
<script src="https://img.hcharts.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
	<script>
	$(function () {
    // Set up the chart
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'current',
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: '交互性3D柱状图'
        },
        subtitle: {
            text: '可通过滑动下方滑块测试'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        series: [{
            name:'实时信息图',
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        }]
    });
});
</script>
<?php require_once 'footer.php';?>