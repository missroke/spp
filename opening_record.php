<?php
/**
 * 开门记录
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/other.css">
<link rel="stylesheet" type="text/css" href="resource/css/iconfont.css">
        <div class="rightpanel">
            <div class="container">
                <h1 class="devicelist">总开门记录列表</h1>
                <ul class="operat">
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
                    <li class='rf searchbox'>
                        <input type="search" name="search" id="search" class="" placeholder="具体搜索...">
                        <select name="" id="" class="pcontent" style="width: 100px;height: 25px;text-align: center;border:1px solid #f1f1f1" required>
                            <option value="">搜索条件...</option>
                            <option value="">房号</option>
                            <option value="">姓名</option>
                            <option value="">身份证号</option>
                            <option value="">手机号</option>
                            <option value="">开门类型</option>
                        </select>
                        <button class="search">搜索</button>
                    </li>
                </ul>
                <table class="tablelist">
                    <tbody>
                        <tr>
                            <th>时间</th>                       
                            <th>房号</th>
                            <th>姓名</th>
                            <th>身份证号</th>
                            <th>手机号/卡号</th>
                            <th>开门类型</th>
                            <th>地址</th>
                            <th>图像</th>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>1002</td>
                            <td>张一</td>
                            <td>213213213213312123</td>
                            <td>13365231245</td> 
                            <td>手机开门</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td class="check"><i class="iconfont icon-chakan"></i></td>
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>1002</td>
                            <td>张一</td>
                            <td>213213213213312123</td>
                            <td>13365231245</td> 
                            <td>刷卡开门</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td class="check"><i class="iconfont icon-chakan"></i></td>                    
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>1002</td>
                            <td>张一</td>
                            <td>213213213213312123</td>
                            <td>13365231245</td> 
                            <td>app开门</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td class="check"><i class="iconfont icon-chakan"></i></td> 
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>1002</td>
                            <td>张一一</td>
                            <td>213213213213312123</td>
                            <td>13365231245</td> 
                            <td>呼叫开门</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td class="check"><i class="iconfont icon-chakan"></i></td> 
                        </tr>
                        <tr>
                            <td>2017-07-21 12：21：32</td>
                            <td>1002</td>
                            <td>张一</td>
                            <td>213213213213312123</td>
                            <td>13365231245</td> 
                            <td>蓝牙开门</td>
                            <td>西湖区XX街道AA社区宋江村1区1幢1号门</td>
                            <td class="check"><i class="iconfont icon-chakan"></i></td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
<?php require_once 'footer.php';?>