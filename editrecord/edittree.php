<?php
include '../include/condb.php';
	ini_set('display_errors', 1);
	error_reporting(~0);
	// if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../images/upload/".$_FILES["filUpload"]["name"]))
	// {
	// 	echo "Copy/Upload Complete<br>";

	$sql = "UPDATE `Tree` SET `TreeName`='".$_POST["txtName"]."',`SciName`='".$_POST["txtSciName"]."',`Type`='".$_POST["txtType"]."',`Tree_Detail`='".$_POST["detail"]."',`EditDate`=now() WHERE `Tree_ID` = ".$_POST["txtID"]."";
	// "UPDATE Tree SET"
	// 	." TreeName = '".$_POST["txtName"]."',"
	// 	." SciName = '".$_POST["txtSciName"]."',"
	// 	// ." Pic = '".$_FILES["filUpload"]["name"]."',"
	// 	." Type = '".$_POST["txtType"]."',"
	// 	." Tree_Detail = '".$_POST["detail"]."',"
	// 	." EditDate = now()"
	// 	." WHERE ID = '".$_POST["txtID"]."'";

	$query = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());

	if($query) {
	 	echo "<meta http-equiv ='refresh'content='0;URL=../main.php'>";
	}else{
        echo "<script type='text/javascript'>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>" ;
    }
// }
	mysqli_close($conn);
?>

