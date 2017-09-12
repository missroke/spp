<?php
/**
 * 左侧区域列表
 */
?>
<link rel="stylesheet" href="resource/css/leftpanel.css">
	<div class="panel">
		<div class="leftpanel">
			<div id="menuTree" class="menuTree"></div>
		</div>
		<script type="text/javascript">
var json =[{
	"name":"顶级节点",
	"userLevel":"+",
    "list":[
    {
        "name": "西湖区",
        "url":"house_gridding_usual.php",
        "userLevel":"+",
        "list": [
            {
            	//显示名称
                "name": "xx街道",
                //跳转名称
                "url" :"url_herf",
                //用户等级
                "userLevel":"+",
                //下级
                "list": [
                    {
                        "name": "AA社区",
                        "url":"population_upper.php",
                        "userLevel":"+ ",
                        "list": [
                          {
                          	//显示名称
			                "name": "宋江村",
			                //跳转名称
			                "url" :"population_center.php",
			                //用户等级
			                "userLevel":"+",
			                "list": [
			                  {
			                  	//显示名称
				                "name": "1区1幢-户",
				                //跳转名称
				                "url" :"population_under.php",
				                //用户等级
				                "userLevel":"",
			                  }
			                ]
                          }
                        ]
                    }
                ]
            }
        ]
    },
    {
        "name": "滨江区",
        "userLevel":"",
        "list": [
            {
            	//显示名称
                "name": "西兴街道",
                //跳转名称
                "url" :"#",
                //用户等级
                "userLevel":"+",
                //下级
                "list": [
                    {
                        "name": "宾安小区",
                        "userLevel":""
                    }
                ]
            }
        ]
    },
    {
    	"name": "余杭区",
        "userLevel":"",
    }
]
}
]
/*递归实现获取无级树数据并生成DOM结构*/
	var str = "";
	var forTree = function(o){
	 	for(var i=0;i<o.length;i++){
	   		 var urlstr = "";
			 try{
	 				if(typeof o[i]["url"] == "undefined"){
			   	   		urlstr = "<div><span>"+o[i]["userLevel"]+ o[i]["name"] +"</span><ul>";
	 				}else{
	 					urlstr = "<div><span>"+o[i]["userLevel"]+"<a href="+ o[i]["url"] +">"+ o[i]["name"] +"</a></span><ul>"; 
	 				}
	 			str += urlstr;
	 			if(o[i]["list"] != null){
	 				forTree(o[i]["list"]);
	 			}
	   		 str += "</ul></div>";
	 		}catch(e){}
	 }
	 return str;
	}
	/*添加无级树*/
	document.getElementById("menuTree").innerHTML = forTree(json);

	/*树形菜单*/
	var menuTree = function(){
	 //给有子对象的元素加
		 $("#menuTree ul").each(function(index, element) {
	 		var ulContent = $(element).html();
	 		var spanContent = $(element).siblings("span").html();
	 		if(ulContent){
				 $(element).siblings("span").html(spanContent) 
	 		}
		 });

		 $("#menuTree").find("div span").click(function(){
		 	 var ul = $(this).siblings("ul");
			 var spanStr = $(this).html();
		 	 var spanContent = spanStr.substr(3,spanStr.length);
			 if(ul.find("div").html() != null){
				 if(ul.css("display") == "none"){
					 ul.show(300);
		 			 // $(this).html("[-]" + spanContent);
		 		 }else{
		 			ul.hide(300);
		 			// $(this).html("[+] " + spanContent);
		 		 }
		 	}
		 })
	}()

	/*树形列表展开*/
	$("#btn_open").click(function(){
		$("#menuTree ul").show(300);
	 	curzt("-");
	})

	/*收缩*/
	$("#btn_close").click(function(){
	 	$("#menuTree ul").hide(300);
	 	curzt("+");
	})
	function curzt(v){
	 $("#menuTree span").each(function(index, element) {
		 var ul = $(this).siblings("ul");
		 var spanStr = $(this).html();
		 var spanContent = spanStr.substr(3,spanStr.length);
		 if(ul.find("div").html() != null){
	 		$(this).html("["+ v +"] " + spanContent);
	 	 }
	 }); 
	}
</script>