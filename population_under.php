<?php
/**
 * 出租户人口管理【末节点】
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/other.css">
<link rel="stylesheet" type="text/css" href="resource/css/iconfont.css">
		<div class="rightpanel">
			<div class="container">
				<div class="wrap">
					<p class="household">
						<span class="houseimg"><img src="resource/images/reduce.png" alt=""></span>出租户信息
					</p>
					<table class="tablelist">
	                    <tbody>
	                        <tr>
	                            <th>出租屋名称</th>
	                            <th>房屋属性</th>
	                            <th>租房数量</th>
	                            <th>流动人口限制</th>
	                            <th>常住人口限制</th>
	                            <th>门禁数</th>
	                            <th>详情/编辑</th>
	                        </tr>
	                        <tr>
	                            <td>1区1幢</td>
	                            <td>整租</td>
	                            <td>24</td>
	                            <td>150</td>
	                            <td>10</td>
	                            <td>2</td>
	                            <td class="editor">
	                            	<a href="house_details.edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>1区1幢</td>
	                            <td>整租</td>
	                            <td>24</td>
	                            <td>150</td>
	                            <td>10</td>
	                            <td>2</td>
	                            <td class="editor">
	                            	<a href="house_details.edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                    </tbody>
                </table>
				</div>
				<div class="wrap">
					<p class="household">
						<span class="houseimg"><img src="resource/images/reduce.png" alt=""></span>门禁信息
					</p>
					<table class="tablelist">
	                    <tbody>
	                        <tr>
	                            <th>门禁名称</th>
	                            <th>序列号</th>
	                            <th>授权卡号</th>
	                            <th>状态</th>
	                            <th>版本</th>
	                            <th>编辑</th>
	                        </tr>
	                        <tr>
	                            <td>设备1-前门</td>
	                            <td>1a2s2d5e6w3q5e4t8r9e</td>
	                            <td>7894agfdsf46555</td>
	                            <td>在线</td>
	                            <td>5.1.0.1</td>
	                            <td class="editor">
	                            	<a href="device_edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>设备1-后门</td>
	                            <td>7a8s9d5f6d5f4e8y7u9g6</td>
	                            <td>789a456dfsaf13a</td>
	                            <td>离线</td>
	                            <td>5.3</td>
	                            <td class="editor">
	                            	<a href="device_edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                    </tbody>
                </table>
				</div>
				<div class="wrap">
					<p class="household lf">
						<span class="houseimg"><img src="resource/images/reduce.png" alt=""></span>人口信息
					</p>
					<div class="lf selectbox">
						<input type="checkbox" name="pop">流动人口
						<input type="checkbox" name="pop">常住人口
						<input type="checkbox" name="pop">房东
					</div>
					<table class="tablelist">
	                    <tbody>
	                        <tr>
	                            <th>姓名</th>
	                            <th>序号</th>
	                            <th>手机号</th>
	                            <th>身份证号</th>
	                            <th>属性</th>
	                            <th>设备名</th>
	                            <th>登记时间</th>
	                            <th>图像</th>
	                            <th>详情/编辑</th>
	                        </tr>
	                        <tr>
	                            <td>人人1</td>
	                            <td>0000</td>
	                            <td>12345678998</td>
	                            <td>123456789987456321</td>
	                            <td>普通用户</td>
	                            <td>设备1-前门</td>
	                            <td>2015-01-23</td>
	                            <td class="check"><i class="iconfont icon-chakan"></i></td>
	                            <td class="editor">
	                            	<a href="population_details.edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>人人1</td>
	                            <td>0000</td>
	                            <td>12345678998</td>
	                            <td>123456789987456321</td>
	                            <td>普通用户</td>
	                            <td>设备1-前门</td>
	                            <td>2015-01-23</td>
	                            <td class="check"><i class="iconfont icon-chakan"></i></td>
	                            <td class="editor">
	                            	<a href="population_details.edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>人人1</td>
	                            <td>0000</td>
	                            <td>12345678998</td>
	                            <td>123456789987456321</td>
	                            <td>普通用户</td>
	                            <td>设备1-前门</td>
	                            <td>2015-01-23</td>
	                            <td class="check"><i class="iconfont icon-chakan"></i></td>
	                            <td class="editor">
	                            	<a href="population_details.edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>人人1</td>
	                            <td>0000</td>
	                            <td>12345678998</td>
	                            <td>123456789987456321</td>
	                            <td>普通用户</td>
	                            <td>设备1-前门</td>
	                            <td>2015-01-23</td>
	                            <td class="check"><i class="iconfont icon-chakan"></i></td>
	                            <td class="editor">
	                            	<a href="population_details.edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>人人1</td>
	                            <td>0000</td>
	                            <td>12345678998</td>
	                            <td>123456789987456321</td>
	                            <td>普通用户</td>
	                            <td>设备1-前门</td>
	                            <td>2015-01-23</td>
	                            <td class="check"><i class="iconfont icon-chakan"></i></td>
	                            <td class="editor">
	                            	<a href="population_details.edit.php"><i class="iconfont icon-bianji"></i></a>
	                            </td>
	                        </tr>
	                    </tbody>
                </table>
				</div>
            </div>
		</div>
	</div>
	<script>
/***********出租户人口管理   到户    点击展开，收缩***************************************/
    $(".wrap").each(function(index,obj){
        $(".household",$(obj)).click(function(){
        	$(".tablelist",$(obj)).toggleClass("tableactive");
	        $(".houseimg img",$(obj)).attr("src","./resource/images/add.png");
	        if(!$(".tablelist",$(obj)).hasClass("tableactive")){
	           $(".houseimg img",$(obj)).attr("src","./resource/images/reduce.png")   
	    	}
        })
    })   
</script>
	<?php require_once 'footer.php';?>