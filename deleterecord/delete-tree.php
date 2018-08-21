<?php
include '../include/condb.php';
	ini_set('display_errors', 1);
	error_reporting(~0);
$result=$_GET["ID"];
$sql="DELETE FROM Tree WHERE Tree_ID ='$result'";

	$query = mysqli_query($conn,$sql);

	if($query) {
	 	echo "<meta http-equiv ='refresh'content='0;URL=../main.php'>";
	}else{
        echo "<script type='text/javascript'>alert('ไม่สามารถลบข้อมูลนี้ได้');window.history.go(-1);</script>" ;
    }

	mysqli_close($conn);
?>
<!--  -->