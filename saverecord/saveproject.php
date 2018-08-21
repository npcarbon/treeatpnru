
<?php
include '../include/condb.php';
	// $sql = "SELECT * FROM project WHERE ST_Name = '".$_POST["txtName"]."'OR ST_Code = '".$_POST["txtCode"]."'";
	// $query = mysqli_query($conn,$sql);
	// $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	// if($result['ST_Name'] == $_POST["txtName"]||$result['ST_Code'] == $_POST["txtCode"]){
	// 	        echo "<script>alert('คุณได้ทำการบันทึกโครงการไปแล้วครับ');window.history.go(-1);</script>";
		        
    // } else{
    	


		$sql = "INSERT INTO project (ST_Code, ST_Name, ProName)"
		        . "VALUES ('".$_POST["txtCode"]."',"
		        ." '".$_POST["txtName"]."',"
		        ." '".$_POST["txtProname"]."')";
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
echo "<script>alert('ทำการบันทึกโครงการเรียบร้อย');</script>";
echo "<meta http-equiv ='refresh'content='0;URL=../viewproject.php'>";
    // }
$conn->close();
