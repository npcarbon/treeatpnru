
<?php
include '../include/condb.php';
	$sql = "SELECT * FROM checkin WHERE ST_Name = '".$_POST["txtName"]."'OR ST_Code = '".$_POST["txtCode"]."'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	if($result['ST_Name'] == $_POST["txtName"]||$result['ST_Code'] == $_POST["txtCode"]){
		        echo "<script>alert('คุณได้ทำการเช็คอินไปแล้วครับ');window.history.go(-1);</script>";
		        
    } else{
    	


		$sql = "INSERT INTO checkin (ST_Code, ST_Name, Timein)"
		        . "VALUES ('".$_POST["txtCode"]."',"
		        ." '".$_POST["txtName"]."',"
		        ." NOW())"
		        ;
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
echo "<script>alert('ทำการเช็คอินเรียบร้อย');</script>";
echo "<meta http-equiv ='refresh'content='0;URL=../nameChk.php'>";
    }
$conn->close();
