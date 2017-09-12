<?php
/**
 * 根节点页面
 */
require_once 'header.php';
require_once 'left_area.list.php';
?>
<link rel="stylesheet" type="text/css" href="resource/css/public.css">
		<div class="rightpanel">
			<div class="container">
				<h1 class="ptitle">根节点功能列表：</h1>
				<div class="wrap">
					<span class="pchild">添加子分组</span>
					<ul class="plist">
						<li>
							<span class="pname">子分组名称：</span>
							<span class="pcontent"><input type="text" name="cid" id="cid" placeholder="请输入"></span>
						</li>
						<li class="gridr">
							<span class="pname">上级分组名称：</span>
							<span class="pcontent"><input type="text" disabled="disabled" id="pid" name="" value="根节点"></span>
						</li>
						<li class="gridnum">
							<span class="pname">序号：</span>
							<span class="pcontent">
								<input type="text" name="order" id="order" value="1">
								<i>注：序号可用作排序使用，如果不写则为默认排序，如果重复则按字典序正序排列。</i>
							</span>
						</li>
						<button class="sure" id="submit" name="submit">提交</button>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'footer.php';?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#submit").click(function(){
				var list = {};
				list.cname = $("#cid").val();
				list.pname = $("#pid").val();
				list.order = $("#order").val();
				// console.log(list);
				//提交数据
		// 		$.post(
					
		// 			"url",

		// 			data,

		// 			function(data,status){//回调
						// if(data == true){
						// 	layer.msg('提交成功!',{icon:6});
						// }else{
						// 	layer.msg('被抢走了，再来一次',{icon:5});
						// }
		// 			},
		// 			"json"//数据格式	
		// 		);
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


	</script>
	