<?php
/**
 * 报警记录
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/other.css">
        <div class="rightpanel">
            <div class="container">
               <h1 class="devicelist">西湖区报警记录列表</h1>
                <ul class="operat">
                <div id="timesearch">
                    <li class="lf timesearch">时间从：
                        <div class="iDate date">
                            <input type="text" class="profits" placeholder="选择开始日期">
                            <button type="button" class="addOn"></button>
                        </div>
                    </li>
                    <li class="lf timesearch">到：
                        <div class="iDate date">
                            <input type="text" class="profite" placeholder="选择结束日期">
                             <button type="button" class="addOn"></button>
                        </div>
                    </li>
                </div>
                <div id="conditionsearch">
                    <li class='rf searchbox'>
                        <input type="search" name="search" id="search" class="" placeholder="具体搜索...">
                        <select name="" id="" class="pcontent" style="width: 100px;height: 25px;text-align: center;border:1px solid #f1f1f1" required>
                            <option value="">搜索条件...</option>
                            <option value="">报警设备</option>
                            <option value="">房号</option>
                            <option value="">报警类型</option>
                            <option value="">状态</option>
                        </select>
                        <button class="search">搜索</button>
                    </li>
                </div>
                </ul>
                <table class="tablelist">
                    <tbody>
                        <tr>
                            <th>时间</th>
                            <th>报警设备</th>
                            <th>房号</th>
                            <th>报警类型</th>
                            <th>状态</th>
                            <th>处理人</th>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td>1002</td>
                            <td>设备在线</td>
                            <td>已处理</td>
                            <td>XXX</td>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td>1002</td>
                            <td>门已关</td>
                            <td class="untreated">未处理</td>
                            <td>XXX</td>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td>1002</td>
                            <td>设备离线</td>
                            <td class="untreated">未处理</td>
                            <td>XXX</td>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td>1002</td>
                            <td>门未关</td>
                            <td class="untreated">未处理</td>
                            <td>XXX</td>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td>1002</td>
                            <td>消防报警</td>
                            <td>已处理</td>
                            <td>XXX</td>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td>1002</td>
                            <td>人脸认证失败</td>
                            <td>已处理</td>
                            <td>XXX</td>
                        </tr>
                    </tbody>
                </table> 
            </div> 
            
        </div>
    </div>
<?php require_once 'footer.php';?>  