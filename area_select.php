<?php
/*辖区选择*/

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>辖区选择</title>
	<link rel="stylesheet" href="resource/css/demo.css" type="text/css">
	<link rel="stylesheet" href="resource/css/zTreeStyle.css" type="text/css">
	<script type="text/javascript" src="resource/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="resource/js/jquery.ztree.core.js"></script>
	<script type="text/javascript" src="resource/js/jquery.ztree.excheck.js"></script>
</head>
<style>
	html,body{
		width: 100%;
		height: 100%;
		background: #f0f6e4;
	}
	.content_wrap{
       position: absolute;
       left: 0;
       bottom:0;
       top: 0;
       right:0;
       margin: auto;
	}
</style>
<body>
	<div class="content_wrap">
		<div class="zTreeDemoBackground left">
			<ul id="tree" class="ztree"></ul>
		</div>
	</div>
</body>
<script>
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
			{id:0,pId:-1,name:"根节点",open:true},
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
			var zTree = $.fn.zTree.getZTreeObj("tree"),
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
			$.fn.zTree.init($("#tree"), setting, zNodes);
			$("#disabledTrue").bind("click", {disabled: true}, disabledNode);
			$("#disabledFalse").bind("click", {disabled: false}, disabledNode);

		});
</script>
</html>
