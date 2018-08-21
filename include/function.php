<?php
//check qeury error
echo mysqli_error($conn);

session_start();
if( !isset($_SESSION["Username"]) == NULL ) {
header("Location: login.php");
}

$action = "";
	if($action=="logout"){ // เช็คว่าผู้ใช้ต้องการจะล๊อกเอ้าออกจากระบบหรือไม่

	  session_start();

	  session_destroy(); // ล้างค่าตัวแปรทั้งหมดออกให้เกลี้ยงเลย....
}
