<?php
/**
 * 卡号列表
 */
require_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/system.css">
<div class="content">
       <h1 class="devicelist">卡号列表</h1>
        <ul class="operat">
            <a href="add_card.php" style="cursor: pointer;"><li class="adddevice lf">添加卡号</li></a>
            <a href="import_card.php" style="cursor: pointer;"><li class="importdevice lf">批量导入卡号</li></a>
            <li class='rf searchbox'>
                <input type="text">
                <span class="search">搜索</span>
            </li>
        </ul>
        <table class="tablelist">
            <tbody>
                <tr>
                    <th>卡号</th>
                    <th>卡号类型</th>
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