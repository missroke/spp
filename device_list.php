<?php
/**
 *设备列表
 */
require_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/system.css">
    <div class="content">
        <h1 class="devicelist">设备列表</h1>
        <ul class="operat">
        	<a href="add_device.php" style="cursor: pointer;" id="add_device"><li class="adddevice lf">添加设备</li></a>
        	<a href="import_device.php" style="cursor: pointer;" ><li class="importdevice lf">批量导入设备</li></a>
        	<li class='rf searchbox'>
        		<input type="text">
        		<span class="search">搜索</span>
        	</li>
        </ul>
    	<table class="tablelist">
        	<tbody>
        		<tr>
        			<th>设备名</th>
        			<th>序列号</th>
        			<th>生成时间</th>
        		</tr>
        		<tr>
        			<td>阿斯利康打两份</td>
        			<td>asdfghjkl</td>
        			<td>2012年12-32-34</td>
        		</tr>
        		<tr>
        			<td>阿斯利康打两份</td>
        			<td>asdfghjkl</td>
        			<td>2012年12-32-34</td>
        		</tr>
        		<tr>
        			<td>阿斯利康打两份</td>
        			<td>asdfghjkl</td>
        			<td>2012年12-32-34</td>
        		</tr>
        		<tr>
        			<td>阿斯利康打两份</td>
        			<td>asdfghjkl</td>
        			<td>2012年12-32-34</td>
        		</tr>
        	</tbody>
        </table>
    </div>
<?php require_once 'footer.php';?>
<script>


</script> 