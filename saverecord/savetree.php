
<?php
include '../include/condb.php';
	// $sql = "SELECT * FROM tree WHERE TreeName = '".$_POST["txtName"]."'";
	// $query = mysqli_query($conn,$sql);
	// $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	// if($result['TreeName'] == $_POST["txtName"]){
	// 	        echo "<script>alert('ชื่อต้นไม้ซ้ำ กรุณาตรวจสอบชื่อต้นไม้');window.history.go(-1);</script>";
	// 	        exit();
 //    } 
	// if(trim($_FILES["filUpload"]["tmp_name"]) != "")
	// {	$images = $_FILES["filUpload"]["name"];
	// 	$new_images = "Thumbnails_".$_FILES["filUpload"]["name"];
	// 	copy($_FILES["filUpload"]["tmp_name"],"../images/upload/".$_FILES["filUpload"]["name"]);
	// 	$width=200; //*** Fix Width & Heigh (Autu caculate) ***//
	// 	$size=GetimageSize($images);
	// 	$height=round($width*$size[1]/$size[0]);
	// 	$images_orig = ImageCreateFromJPEG($images);
	// 	$photoX = ImagesX($images_orig);
	// 	$photoY = ImagesY($images_orig);
	// 	$images_fin = ImageCreateTrueColor($width, $height);
	// 	ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
	// 	ImageJPEG($images_fin,"../images/Thumbnails/".$new_images);
	// 	ImageDestroy($images_orig);
	// 	ImageDestroy($images_fin);
	if(trim($_FILES["fileUpload"]["tmp_name"]) != "")
	{
		$images = $_FILES["fileUpload"]["tmp_name"];
		$new_images = "Thumbnails_".$_FILES["fileUpload"]["name"];
		copy($_FILES["fileUpload"]["tmp_name"],"../images/upload/".$_FILES["fileUpload"]["name"]);
		$height=200; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$width=round($height*$size[0]/$size[1]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../images/Thumbnails/".$new_images);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
		echo "Copy/Upload Complete<br>";
		$sql = "INSERT INTO Tree (TreeName, SciName, Pic, Type, Tree_Detail, CreateDate)"
		        . "VALUES ('".$_POST["txtName"]."',"
		        ." '".$_POST["txtSciName"]."',"
		        ." '".$_FILES["fileUpload"]["name"]."',"
		        ." '".$_POST["txtType"]."',"
		        ." '".$_POST["detail"]."',"
		        ." NOW())"
		        ;
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
// echo "else1 ".$sql."<br>";

 //@header( "location:  ../main.php" );
// echo "<script type='text/javascript'> window.location='https://goo.gl/JCAADZ';</script>";

	}
$conn->close();
