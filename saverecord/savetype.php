
<?php
include '../include/condb.php';
	// $sql = "SELECT * FROM tree WHERE TreeName = '".$_POST["txtName"]."'";
	// $query = mysqli_query($conn,$sql);
	// $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	// if($result['TreeName'] == $_POST["txtName"]){
	// 	        echo "<script>alert('ชื่อต้นไม้ซ้ำ กรุณาตรวจสอบชื่อต้นไม้');window.history.go(-1);</script>";
	// 	        exit();
 //    } 

		$sql = "INSERT INTO Type (Type_Name, CreateDate)"
		        . "VALUES ('".$_POST["txtName"]."',"
		        ." NOW())"
		        ;
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
// echo "else1 ".$sql."<br>";

@header( "location:  ../addtype.php" );

$conn->close();
