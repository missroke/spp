<?php
/**
 * 普通节点页面
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/public.css">
		<div class="rightpanel">
			<div class="container">
				<h1 class="ptitle">西湖区节点功能列表：</h1>
				<div class="wrap">
					<span class="pchild">添加子分组</span>
					<ul class="plist">
						<li>
							<span class="pname">子分组名称：</span>
							<span class="pcontent"><input type="text" name="cid" id="cid" value="" placeholder="请输入..."></span>
						</li>
						<li class="">
							<span class="pname">上级分组名称：</span>
							<span class="pcontent"><input type="text" name="pid" id="pid" disabled="disabled" value="根节点" /></span>
						</li>
						<li class="gridnum">
							<span class="pname">序号：</span>
							<span class="pcontent">
								<input type="text" name="order" id="order" value="1">
								<i>注：序号可用作排序使用，如果不写则为默认排序，如果重复则按字典序正序排列。</i>
							</span>
						</li>
						<button type="button" class="sure" id="add">提交</button> 
					</ul>
				</div>
				<div  class="wrap">
					<span class="pchild">编辑分组</span>
					<ul class="plist">
						<li>
							<span class="pname">当前分组名称：</span>
							<span class="pcontent"><input type="text" name="edit_cid" id="edit_id" value="西湖区" ></span>
						</li>
						<li class="">
							<span class="pname">上级分组名称：</span>
							<span class="pcontent"><input type="text" name="edit_pid" disabled="disabled" value="根节点" /></span>
						</li>
						<li class="gridnum">
							<span class="pname">序号：</span>
							<span class="pcontent">
								<input type="text" name="edit_order" id="edit_name" value="2">
								<i>注：序号可用作排序使用，如果不写则为默认排序，如果重复则按字典序正序排列。</i>
							</span>
						</li>
						<button type="button" class="sure" id="edit">提交</button> 
					</ul>
				</div>
				<div  class="wrap">
					<span class="pchild">移动分组</span>
					<ul class="plist">
						<li  class="gridr">
							<span class="pname">当前分组名称：</span>
							<span class="pcontent"><input type="text" name="" value="西湖区"></span>
						</li>
						<li>
							<span class="pname">移动到分组：</span>
							<span class="pcontent"><input type="text" name="move_cid" id="move_cid" value="" onclick="showMenu();"></span>
						</li>
						<button type="button" class="sure" id="move">提交</button> 
					</ul>
				</div>
				<div  class="wrap">
					<div class="plist">
						<span class="pchild">删除该分组</span>
						<p class="pchildtext" style="color:red">注：如果此节点下有子节点则不允许删除！！！</p>
						<button type="button" class="sure" id="del" >提交</button> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'footer.php';?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#del").hover(function(){
			$("#del").css("background-color","red");
		},function(){
			$("#del").css("background-color","#4fb6e9");
		});
		$("#add,#edit,#move").hover(function(){
			$(this).css("background-color","#10581d");
		},function(){
				$(this).css("background-color","#4fb6e9");
			});
			
		
		$("#del").click(function(){
			layer.confirm('您确定删除子分组吗？',{
				btn: ['确定','取消']//按钮
			},function(){
				//回调删除操作
				//
				//
				layer.msg('删除成功!',{icon:1});
			},
			function(){
				
			});
		});

		$("#order").keydown(function(int){
			var code = parseInt(int.keyCode);
			if (code >= 96 && code <= 105 || code>=48 && code <= 57 || code ==8) {
				return true;
			}else{
				$("#order").focus(function(){
					$(this).val("");
				});
				layer.msg('序号必须为正整数');
				return false;
			}
		});
		$("#order").bind("input propertychange",function(){
			if(isNaN(parseFloat($(this).val())) || parseFloat($(this).val()) <= 0)
				$(this).val(1);
		});	

		$("#add").click(function(){
			var add = {};
			add.cname = $("#cid").val();
			add.pname = $("#pid").val();
			add.order = $("#order").val();
//提交添加分组数据
			// $.post(
			// 	"url",//提交路径
			// 	add,
			// 	function(){},
			// 	"json"//传输格式
			// 	);
		});
		$("#edit").click(function(){
			var edit = {};
			edit.cname = $("#edit_id").val();
			edit.pname = $("#edit_pid").val();
			edit.order = $("#edit_order").val();
//提交编辑分组数据
			// $.post(
			// 	"url",//提交路径
			// 	add,
			// 	function(){},
			// 	"json"//传输格式
			// 	);
		});

		/*$("#move_cid").focus(function(){
			//自定义页
			layer.open({
				type:1,
				area:['600px','360px'],
				shadeClose:true,
				title:"移动分组至...",
				content:$("#treeDemo")
			});
		});*/


	});


</script>
<script src="resource/js/jquery-1.11.2.min.js"></script>
    <script src="resource/js/layer/layer.js"></script>
	<link rel="stylesheet" href="resource/css/zTreeStyle.css" type="text/css">
	<script type="text/javascript" src="resource/js/jquery.ztree.core.js"></script>
	<script type="text/javascript" src="resource/js/jquery.ztree.excheck.js"></script>
	<script>
		$('<div id="menuContent" class="menuContent" style="display:none; position: absolute;"><ul id="treeDemo" class="ztree" style="margin-top:0; width:195px; height: 300px; display:block;border:1px solid #797979;z-index:999;background:#fff"></ul></div>').appendTo("body")
		var setting = {
			check: {
				enable: true,
				chkStyle: "radio",
				radioType: "all"
			},
			view: {
				dblClickExpand: false
			},
			data: {
				simpleData: {
					enable: true
				}
			},
			callback: {
				onClick: onClick,
				onCheck: onCheck
			}
		};

		var zNodes =[
            {id:1, pId:0, name:"西湖区", open:true},
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

		function onClick(e, treeId, treeNode) {
			var zTree = $.fn.zTree.getZTreeObj("treeDemo");
			zTree.checkNode(treeNode, !treeNode.checked, null, true);
			return false;
		}

		function onCheck(e, treeId, treeNode) {
			var zTree = $.fn.zTree.getZTreeObj("treeDemo"),
			nodes = zTree.getCheckedNodes(true),
			v = "";
			for (var i=0, l=nodes.length; i<l; i++) {
				v += nodes[i].name + ",";
			}
			if (v.length > 0 ) v = v.substring(0, v.length-1);
			var cityObj = $("#move_cid");
			cityObj.attr("value", v);
		}

		function showMenu() {
			var cityObj = $("#move_cid");
			var cityOffset = $("#move_cid").offset();
			$("#menuContent").css({left:cityOffset.left + "px", top:cityOffset.top + cityObj.outerHeight() + "px"}).slideDown("fast");

			$("body").bind("mousedown", onBodyDown);
		}
		function hideMenu() {
			$("#menuContent").fadeOut("fast");
			$("body").unbind("mousedown", onBodyDown);
		}
		function onBodyDown(event) {
			if (!(event.target.id == "menuBtn" || event.target.id == "move_cid" || event.target.id == "menuContent" || $(event.target).parents("#menuContent").length>0)) {
				hideMenu();
			}
		}

		$(document).ready(function(){
			$.fn.zTree.init($("#treeDemo"), setting, zNodes);
		});
    </script>
    	<script>
    	
        
	</script>