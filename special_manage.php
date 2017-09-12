<?php
/**
 * 特殊人群管理
 */
require_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/system.css">
<div class="content">
        <h1 class="devicelist">特殊住户列表</h1>
        <ul class="operat">
        	<a href="add_special.php" style="cursor: pointer;"><li class="adddevice lf">添加特殊住户</li></a>
        	<a href="import_special.php" style="cursor: pointer;"><li class="importdevice lf">批量导入特殊住户</li></a>
        	<li class='rf searchbox'>
        		<input type="text">
        		<span class="search">搜索</span>
        	</li>
        </ul>
    	<table class="tablelist">
        	<tbody>
        		<tr>
        			<th>姓名</th>
        			<th>身份证号</th>
        			<th>手机号</th>
        			<th>备注/类型</th>
        			<th>编辑</th>
        			<th>删除</th>
        		</tr>
        		<tr>
        			<td>张三</td>
        			<td>14036512231212</td>
        			<td>13956234121</td>
        			<td></td>
        			<td></td>
        			<td></td>
        		</tr>
        		<tr>
        			<td>张三</td>
        			<td>asdfghjkl</td>
        			<td>13956234121</td>
        			<td></td>
        			<td></td>
                    <td></td>
        		</tr>
        		<tr>
        			<td>张三是猪</td>
        			<td>asdfghjkl</td>
        			<td>13956234121</td>
        			<td></td>
        			<td></td>
        			<td></td>
        		</tr>
        		<tr>
        			<td>张三</td>
        			<td>asdfghjkl</td>
        			<td>13956234121</td>
        			<td></td>
        			<td></td>
        			<td></td>
        		</tr>
        	</tbody>
        </table>
    </div>
<?php require_once 'footer.php';?>