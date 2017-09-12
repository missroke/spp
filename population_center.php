<?php
/**
 * 出租户人口管理【村】)
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/other.css">
		<div class="rightpanel">
			<div class="container">
				<ul class="opsearch">
                    <li class='rf searchbox'>
                        <input type="text" placeholder="搜索设备">
                        <span class="search">搜索</span>
                    </li>
                </ul>
                <h1 class="devicelist">宋江村出租户列表</h1>
                <ul class="operat">
                    <li class="adddevice lf">添加出租户信息</li>
                    <li class="adddevice lf">批量导入出租户信息</li>
                    <li class="importdevice lf">导出出租户信息</li>
                </ul>
                <table class="tablelist">
                    <tbody>
                        <tr>
                            <th>出租屋名称</th>
                            <th>房东1</th>
                            <th>手机号1</th>
                            <th>身份证号1</th>
                            <th>房东2</th>
                            <th>手机号2</th>
                            <th>身份证号2</th>
                            <th>房屋属性</th>
                            <th>租房数量</th>
                            <th>流动人口限制</th>
                            <th>查看/编辑</th>
                            <th>删除</th>
                        </tr>
                        <tr>
                            <td>1取1幢</td>
                            <td>房东1</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>房东2</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>整租</td>
                            <td>24</td>
                            <td>50</td>
                            <td class="editor">
                                <a href="device_edit.php"><i class="iconfont icon-bianji"></i></a>
                            </td>
                            <td class="delete">
                                <a href="#"><i class="iconfont icon-shanchu-copy"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1取1幢</td>
                            <td>房东1</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>房东2</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>整租</td>
                            <td>24</td>
                            <td>50</td>
                            <td class="editor">
                                <a href="device_edit.php"><i class="iconfont icon-bianji"></i></a>
                            </td>
                            <td class="delete">
                                <a href="#"><i class="iconfont icon-shanchu-copy"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1取1幢</td>
                            <td>房东1</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>房东2</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>整租</td>
                            <td>24</td>
                            <td>50</td>
                            <td class="editor">
                                <a href="device_edit.php"><i class="iconfont icon-bianji"></i></a>
                            </td>
                            <td class="delete">
                                <a href="#"><i class="iconfont icon-shanchu-copy"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1取1幢</td>
                            <td>房东1</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>房东2</td>
                            <td>12345678998</td>
                            <td>132654789963258741</td>
                            <td>整租</td>
                            <td>24</td>
                            <td>50</td>
                            <td class="editor">
                                <a href="device_edit.php"><i class="iconfont icon-bianji"></i></a>
                            </td>
                            <td class="delete">
                                <a href="#"><i class="iconfont icon-shanchu-copy"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
		</div>
	</div>

<?php require_once 'footer.php';?>