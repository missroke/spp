<?
/**
 * 公安系统管理节点转换入口
 */
session_start();
switch ($_SESSION['id']) {
	case '0':
		header('Location:main.php');
		break;
	
	default:
		header('Location:main_as.php');
		break;
}
?>