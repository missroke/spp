<?php
/**
 * 导入Excel文件
 */

function uploadFile($file,$filetempname)
{
	$filePath = 'resource/upload';
	$str = "";
	require_once './resource/plugin/PHPExcel.php';
	require_once './resource/plugin/PHPExcel/IOFactory.php';
	require_once './resource/plugin/PHPExcel/Reader/Excel2007.php';
	$filename = explode('.', $file);//将上传文件名以“.”为准做成一个数组
	$time = date("y-m-d-H-i-s");//取当前上传时间
	$filename[0] = $time;
	$name = implode(".", $filename);
	$uploadfile = $filePath.$name;

	$result = move_uploaded_file($filetempname,$uploadfile);
	if($result){
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = PHPExcel_IOFactory::load($uploadfile);
		//取得表名
		$sheet = $objPHPExcel->getSheet(0);
		//取总行
		$highestRow = $sheet->getHighestRow();
		//取得总列
		$highestColumn = $sheet->getHighestColumn();
		//插入数据
		for($j=2;$j<=$highestRow;$j++){
			for($k='A';$k<=$highestColumn;$k++){
				//读取单元格
				$str .= iconv('utf8','gbk',$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()).'\\';
			}
			$strs = &nbsp;explode("\\",$str);
			//var_dump($strs);
			//die();
			//插入数据库
			
		}else{
			layer.msg();
		}
	}
	return 

}
?>
