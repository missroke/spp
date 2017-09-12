<?php
/**
 * 出租屋网格管理
 * 判断是否是根节点ID，如果是，则跳转到house_gridding_top.php
 * 否则，跳转至house_gridding_usual.php
 */
switch ($_COOKIE['id']){
	case '0':
		header("Location:house_gridding_usual.php");
		break;
	
	default:
		header("Location:house_gridding_top.php");
		break;
}


?>
