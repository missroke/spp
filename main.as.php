<?php
/**
 *公安系统管理（末级）
 * 
 */
require_once 'header.php';
require_once 'left_admin.list.php';
?>
<link rel="stylesheet" href="resource/css/public.css">
		<div class="rightpanel">
			<div class="container">
				<h1 class="ptitle">公安总局功能列表：</h1>
				<div>
					<span class="pchild">添加子账号</span>
					<ul class="plist">
						<li>
							<span class="pname">名称：</span>
							<span class="pcontent"><input type="text" class="" id="add_name" name="add_name" placeholder="设置名称" onblur=""></span>
						</li>
						<li>
							<span class="pname">账号：</span>
							<span class="pcontent"><input type="text" class=""
							id="add_account" name="add_account" placeholder="请输入账号" onblur=""></span>
						</li>
						<li>
							<span class="pname">密码：</span>
							<span class="pcontent"><input type="password" class="" id="add_pswd" name="add_password" placeholder="设置密码" onblur=""></span>
						</li>
						<li>
							<span class="pname">确认密码：</span>
							<span class="pcontent"><input type="password" class="" id="add_repswd" name="add_repswd" placeholder="密码确认"></span>
						</li>
						<li>
							<span class="pname">联系方式：</span>
							<span class="pcontent"><input type="text" class=""
							 id="add_phone" name="add_phone" placeholder="请输入手机号"></span>
						</li>
						<li>
							<span class="pname">身份证号：</span>
							<span class="pcontent"><input type="text" class=""
							 id="add_identity" name="add_identity" placeholder="请输入身份证号"></span>
						</li>
						<li>
							<span class="pname">官署辖区：</span>
							<span class="pcontent"><button class="select">选择</button></span>
						</li>
						<li>
							<span class="pname lastone">官署辖区：</span>
							<span class="pcontent lastcontent">
								<input type="checkbox" name="add" class="checkbox" id="add_q1" value="权限1"><i>权限1</i>
								<input type="checkbox" name="add" class="checkbox" id="add_q2" value="权限2"><i>权限2</i>
								<input type="checkbox" name="add" class="checkbox" id="add_q3" value="权限3"><i>权限3</i><br>
								<input type="checkbox" name="add" class="checkbox" id="add_q4" value="权限4"><i>权限4</i>
								<input type="checkbox" name="add" class="checkbox" id="add_q5" value="权限5"><i>权限5</i>
								<input type="checkbox" name="add" class="checkbox" id="add_q6" value="权限6"><i>权限6</i>
							</span>
						</li>
						<input type="button" class="sure" id="add_admin" value="提交" /> 
					</ul>
				</div>
				<div>
					<span class="pchild">编辑账号</span>
					<ul class="plist">
						<li>
							<span class="pname">名称：</span>
							<span class="pcontent"><input type="text" value="夏朵朵"></span>
						</li>
						<li>
							<span class="pname">账号：</span>
							<span class="pcontent"><input type="text" value="xiaduoduo"></span>
						</li>
						<li>
							<span class="pname">密码：</span>
							<span class="pcontent"><input type="password" value="123456"></span>
						</li>
						<li>
							<span class="pname">确认密码：</span>
							<span class="pcontent"><input type="password" value="123456"></span>
						</li>
						<li>
							<span class="pname">联系方式：</span>
							<span class="pcontent"><input type="text" value="123456789"></span>
						</li>
						<li>
							<span class="pname">身份证号：</span>
							<span class="pcontent"><input type="text" value="12345987654323456"></span>
						</li>
						<li>
							<span class="pname">官署辖区：</span>
							<span class="pcontent"><button class="select">查看</button></span>
						</li>
						<li>
							<span class="pname lastone">官署辖区：</span>
							<span class="pcontent lastcontent">
								<input type="checkbox" name="edit" id="edit_q1" class="checkbox" value="权限1"><i>权限1</i>
								<input type="checkbox" name="edit" id="edit_q2" class="checkbox" value="权限2"><i>权限2</i>
								<input type="checkbox" name="edit" id="edit_q3" class="checkbox" value="权限3"><i>权限3</i><br>
								<input type="checkbox" name="edit" id="edit_q4" class="checkbox" value="权限4"><i>权限4</i>
								<input type="checkbox" name="edit" id="edit_q5" class="checkbox" value="权限5"><i>权限5</i>
								<input type="checkbox" name="edit" id="edit_q6" class="checkbox" value="权限6"><i>权限6</i>
							</span>
						</li>
						
						<input type="button" class="sure" id="edit_admin" value="提交" /> 
					</ul>
				</div>
				<div>
					<div class="plist">
						<span class="pchild">删除账号</span>
						<p class="pchildtext">注：如果此账号下有子账号则不允许删除！！！</p>
						<a href="" class="sure" onclick="return comfirm()">确认删除</a>
					</div>

				</div>
			</div>

		</div>
	</div>
	<script src="resource/js/jquery-1.11.2.min.js"></script>
    <script src="resource/js/layer/layer.js"></script>
	<link rel="stylesheet" href="resource/css/zTreeStyle.css" type="text/css">
	<script type="text/javascript" src="resource/js/jquery.ztree.core.js"></script>
	<script type="text/javascript" src="resource/js/jquery.ztree.excheck.js"></script>
	<script>
		$('<ul id="treeDemo" class="ztree" style="display:none"></ul>').appendTo("body")
		var setting = {
			check: {
				enable: true,
				chkDisabledInherit: true
			},
			data: {
				simpleData: {
					enable: true
				}
			}
		};

		var zNodes =[
            {id:1, pId:0, name:"西湖区", open:false},
				{id:101, pId:1, name:"荷花苑"},
				{id:102, pId:1, name:"九莲新村"},
				{id:103, pId:1, name:"桂花城"},
				{id:104, pId:1, name:"古荡新村"},
			{id:2, pId:0, name:"拱墅区", open:false},
			{id:3, pId:0, name:"余杭区", open:false},
			{id:4, pId:0, name:"上城区", open:false},
			{id:5, pId:0, name:"滨江区", open:false},
			{id:6, pId:0, name:"萧山区", open:false},
        ];

		function disabledNode(e) {
			var zTree = $.fn.zTree.getZTreeObj("treeDemo"),
			disabled = e.data.disabled,
			nodes = zTree.getSelectedNodes();
			if (nodes.length == 0) {
				alert("Please select one node at first...");
			}
			if (disabled) {
				inheritParent = $("#py").attr("checked");
				inheritChildren = $("#sy").attr("checked");
			} else {
				inheritParent = $("#pn").attr("checked");
				inheritChildren = $("#sn").attr("checked");
			}

			for (var i=0, l=nodes.length; i<l; i++) {
				zTree.setChkDisabled(nodes[i], disabled, inheritParent, inheritChildren);
			}
		}

		$(document).ready(function(){
			$.fn.zTree.init($("#treeDemo"), setting, zNodes);
			$("#disabledTrue").bind("click", {disabled: true}, disabledNode);
			$("#disabledFalse").bind("click", {disabled: false}, disabledNode);

		});
    </script>
    	<script>
    	$(".select").each(function(index,obj){
           $(obj).click(function(){
			//自定页
				layer.open({
				  type: 1,
				  area: ['600px', '360px'],
				  shadeClose: true, //点击遮罩关闭
				  title:"选择辖区管理",
				  content: $("#treeDemo")
				});
			})
    	})
        
	</script>
<script type="text/javascript">
	$(document).ready(function(){
		//添加子账号
		$("#add_admin").click(function(){
			var result = [];
				result['name'] = $("#add_name").val();
				result['account'] = $("#add_account").val();
				result['pswd'] = $("#add_pswd").val();
				result['phone'] = $("#add_phone").val();
				result['identity'] = $("#add_identity").val();
				result['privilage'] = [];
				var q = [];
				$('input[name="add"]:checked').each(function(){
						q.push($(this).val());
				});
				for(var i=0;i<q.length;i++){
					result['privilage'].push(q[i]);
				}
				// console.log(result);
				// console.log(result);
			// 官署辖区 对象或数组

			 // console.log(q1); 
			// $.post(
			// 	 "",//URL
			// 	 "DATA",//data
			// 	 function(data,status,xhr){},
			// 	 "json"//dataType
			// 	);
		});

		//编辑子账号
		$("#edit_admin").click(function(){

		});
	});

	function comfirm(){
		
	if(confirm("确认要删除吗?")==false){
		return false;
	}		
	}

</script>
<?php require_once 'footer.php';?>