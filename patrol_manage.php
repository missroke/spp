<?php
/**
 * 巡更管理
 */
require_once 'header.php';
require_once 'left_admin.list.php';
?>
<link rel="stylesheet" href="resource/css/other.css">
        <div class="rightpanel">
            <div class="container">
                <h1 class="devicelist patrol"><strong>巡更记录</strong></h1>
                <ul class="operat">
                    <li class="adddevice lf"><a href="">更改巡更设置</a></li>
                    <a href=""><li class="importdevice lf">导出巡更设置</li></a>
                    <li class='rf searchbox'>
                        <input type="text">
                        <select id="" style="width: 100px;height: 25px;text-align: center;border:1px solid #f1f1f1" required>
                        <option value="">搜索条件...</option>
                        <option value="">时间</option>
                        <option value="">姓名</option>
                        <option value="">手机号码</option>
                        </select>
                        <span class="search">搜索</span>
                    </li>
                </ul>
                <table class="tablelist">
                    <tbody>
                        <tr>
                            <th>时间</th>
                            <th>姓名</th>
                            <th>联系方式</th>
                            <th>巡更地点</th>
                        </tr>
                        <tr>
                            <td>2017-08-18  14:15:56</td>
                            <td>AAA</td>
                            <td>13956234121</td>
                            <td>拱墅区XX街道YY社区1区1幢</td>
                        </tr>
                        <tr>
                            <td>2017-08-18  14:15:56</td>
                            <td>BBB</td>
                            <td>13956234121</td>
                            <td>拱墅区XX街道YY社区1区1幢</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
 <?php require_once 'footer.php';?>