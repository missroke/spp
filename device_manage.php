<?php
/**
 * 设备管理
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/other.css">
        <div class="rightpanel">
            <div class="container">
                <h1 class="devicelist">总门禁信息</h1>
                <ul class="operat">
                    <li class='rf searchbox'>
                        <input type="text" placeholder="搜索设备">
                        <span class="search">搜索</span>
                    </li>
                </ul>
                <table class="tablelist">
                    <tbody>
                        <tr>
                            <th>门禁名称</th>
                            <th>序列号</th>
                            <th>状态</th>
                            <th>版本</th>
                            <th>地址</th>
                            <th>操作</th>
                            <th>远程开锁</th>
                        </tr>
                        <tr>
                            <td>设备1-前门</td>
                            <td>1a2s2d5e6w3q5e4t8r9e</td>
                            <td>在线</td>
                            <td>5.1.0.1</td>
                            <td>西湖区XX街道AA社区宋江村1幢1单元</td>
                            <td>
                                <ul class="operation">
                                    <li>导入&nbsp;|</li>
                                    <li>导出&nbsp;|</li>
                                    <li>替换&nbsp;|</li>
                                    <li>编辑&nbsp;|</li>
                                    <li class="canel">删除</li>
                                </ul>
                            </td>
                            <td>开锁</td>
                        </tr>
                        <tr>
                            <td>设备2-后门</td>
                            <td>1a2s2d5e6w3q5e4t8r9e</td>
                            <td>离线</td>
                            <td>5.1.0.1</td>
                            <td>西湖区XX街道AA社区宋江村1幢1单元</td>
                            <td>
                                <ul class="operation">
                                    <li>导入&nbsp;|</li>
                                    <li>导出&nbsp;|</li>
                                    <li>替换&nbsp;|</li>
                                    <a href="device_edit.php"><li>编辑&nbsp;|</li></a>
                                    <li class="canel">删除</li>
                                </ul>
                            </td>
                            <td>开锁</td>

                        </tr>
                        <tr>
                            <td>设备3-前门</td>
                            <td>1a2s2d5e6w3q5e4t8r9e</td>
                            <td>离线</td>
                            <td>5.1.0.1</td>
                            <td>西湖区XX街道AA社区宋江村1幢1单元</td>
                            <td>
                                <ul class="operation">
                                    <li>导入&nbsp;|</li>
                                    <li>导出&nbsp;|</li>
                                    <li>替换&nbsp;|</li>
                                    <li>编辑&nbsp;|</li>
                                    <li class="canel">删除</li>
                                </ul>
                            </td>
                            <td>开锁</td>
                        </tr>
                        <tr>
                            <td>设备4-后门</td>
                            <td>1a2s2d5e6w3q5e4t8r9e</td>
                            <td>离线</td>
                            <td>5.1.0.1</td>
                            <td>西湖区XX街道AA社区宋江村1幢1单元</td>
                            <td>
                                <ul class="operation">
                                    <li>导入&nbsp;|</li>
                                    <li>导出&nbsp;|</li>
                                    <li>替换&nbsp;|</li>
                                    <li>编辑&nbsp;|</li>
                                    <li class="canel">删除</li>
                                </ul>
                            </td>
                            <td>开锁</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once 'footer.php';?>  