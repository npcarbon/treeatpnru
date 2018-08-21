
<?php
include '../include/condb.php';
	$sql = "SELECT * FROM tree WHERE TreeName = '".$_POST["txtName"]."'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	if($result['TreeName'] == $_POST["txtName"]){
		        echo "<script>alert('ชื่อต้นไม้ซ้ำ กรุณาตรวจสอบชื่อต้นไม้');window.history.go(-1);</script>";
		        exit();
    } 
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../images/upload/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";
		$sql = "INSERT INTO Tree (TreeName, SciName, Pic, Type, Tree_Detail, CreateDate)"
		        . "VALUES ('".$_POST["txtName"]."',"
		        ." '".$_POST["txtSciName"]."',"
		        ." '".$_FILES["filUpload"]["name"]."',"
		        ." '".$_POST["txtType"]."',"
		        ." '".$_POST["detail"]."',"
		        ." NOW())"
		        ;
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
// echo "else1 ".$sql."<br>";

@header( "location:  ../main.php" );
	}
$conn->close();
