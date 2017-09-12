<?php
/**
 *批量导入设备
 */
require_once 'header.php';

?>	
		<link rel="stylesheet" href="resource/css/public.css">
		<div class="rightpanel">
			<div class="container">
			<h1>批量导入设备</h1>
			<br/><hr/>
			<span ><a href="resource/upload/导入模板.xlsx" id="upload" style="cursor: pointer;color:blue">请下载Excel模板</a></span>
			<div></div>
			<form id="" name="" action="" method="" enctype="multipart/form-data"></form>
				<input type="hidden" name="leadExcel" value="true">
				<table align="center" width="90%" border="0px">
					<tr>
						<td>
							<input type="file" name="inputExcel"><input type="submit" name="improt" value="导入数据...">
						</td>
					</tr>
				</table>


			</div>
		</div>

<?php require_once 'footer.php';?> 
<script type="text/javascript">

</script>