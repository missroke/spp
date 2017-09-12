<?php
/**
 * 出租户人口管理层级跳转入口
 */
session_start();

switch ($_SESSION['id']) {
	case '0':
		header("Location:population_upper.php");
		break;
	case '1':
		header("Location:population_center.php");

	default:
		header("Location:population_under.php");
		break;
}
?>
