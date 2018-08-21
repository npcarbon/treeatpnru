<?php
	session_start();
include 'condb.php';
$user = $_POST['txtUsername'];
$pass = md5($_POST['txtPassword']) ;
	$sql = " SELECT * FROM loging_in 
	WHERE User_Name = '$user'
	AND Passkey = '$pass'";
  	$query = mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($query,MYSQLI_ASSOC) ;
	echo $sql;
	if($result <= 0)
	{
			echo "<script type='text/javascript'>alert('Username and Password Incorrect!');window.history.go(-1);</script>";
	}
	else
	{
			$_SESSION[login] = "true";
			$_SESSION[UID] = $result["ID"];
			$_SESSION[User_Name] = $user;
			$_SESSION[UserGroupID] = $result["UserGroupID"];

			session_write_close();
			
			if($result["UserGroupID"] == 1)
			{
				header("location:../index.php");
			}
			else
			{
				header("location:../main.php");
			}
	}
	mysql_close();
?>