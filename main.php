﻿<?php
include'include/master.php';
include'include/condb.php';
chkLogin();
?>
<!doctype html>
<html lang="en">
  <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<!-- Title here -->
		<!-- TemplateBeginEditable name="doctitle" -->
		<title>Information System of Plants by Using QR Code</title>
		<!-- TemplateEndEditable -->
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css">
body { 
    background-image: url('images/BG1.jpg');
    background-repeat: round;
    background-attachment: fixed;
}
td {
 padding:3px; 
}
@font-face {
    font-family: "Tahoma";
	font-size: 12px;
}
div.transbox{
    margin-top: 30px;
    margin-bottom: 15px;
    padding: 15px;
    background-color:#00ad00;
    border-radius: 0.25rem !important;
    border:1px solid gray;
  /* for IE */
    filter:alpha(opacity=90);
  /* CSS3 standard */
    opacity:0.9;
    z-index: 0;
}
<?php
  ini_set('display_errors', 1);
  error_reporting(~0);
  $strKeyword = null;

  if(isset($_POST["txtKeyword"]))
  {
    $strKeyword = $_POST["txtKeyword"];
  }
 $perpage = 30;
 if (isset($_GET['page'])) {
 $page = $_GET['page'];
 } else {
 $page = 1;
 }
 
 $start = ($page - 1) * $perpage;
 $sql = "
 SELECT Tree.*, Type.Type_Name FROM Tree 
 INNER JOIN Type ON Tree.Type = Type.Type_ID
 WHERE Tree.TreeName LIKE '%".$strKeyword."%'
OR Type.Type_Name LIKE '%".$strKeyword."%'
 ORDER BY Tree_ID ASC
 LIMIT {$start} , {$perpage} ";

 $query = mysqli_query($conn, $sql);

?>
</style>
  </head>
	<body> 
<div class="container">    
<div class="transbox" style="background: #FFF;">  
<div class="visible-lg"> 
<?php head(); ?>  <br>
</div>
<?php nav(); ?>
<!-- <div class="visible-lg">  -->

<content> 
<form  name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="300">
    <tr>
        <td width="15%">คำค้น</td>
        <td width="50%">
          <input class="form-control" style="width:100%;" type="search" name="txtKeyword" value="<?php echo $strKeyword;?>">
        </td>
        <td width="20%">
          <button type="submit" class="btn btn-default" aria-label="Left Align"> <span class="glyphicon glyphicon-search"> ค้นหา</span> </button>
        </td>
    </tr>
  </table>
</form>
<table width="100%" border="1">
  <tr>
    <td width="15" align="center" bgcolor="#0099FF"><font color="#FFFFFF">ลำดับ</font></td>
<div class="visible-lg">  
    <td width="20%" class="visible-lg" align="center" bgcolor="#0099FF"><font color="#FFFFFF">รูปภาพ</font></td>

    <td width="100" align="center" bgcolor="#0099FF"><font color="#FFFFFF">ชื่อต้นไม้</font></td>
<!--      <td width="100" align="center" bgcolor="#0099FF"><font color="#FFFFFF">ชื่อทางวิทยาศาสตร์</font></td>
 -->    <td width="100" align="center" bgcolor="#0099FF"><font color="#FFFFFF">ประเภท</font></td>
    <td width="20%" class="visible-lg" align="center" bgcolor="#0099FF"><font color="#FFFFFF">QR CODE</font></td>
    <td width="15%" align="center" bgcolor="#0099FF"><font color="#FFFFFF"></font></td>
  </tr>
  <tr>
  <?php
$i=0;
if($page > 1)
{
  $i = $perpage * ($page-1); 
}
    echo mysqli_error($conn);
  while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
 $i++;    
?>
    <td align="center" ><?php echo $i; ?></td>
    <td class="visible-lg"><center><img class="img-rounded" height="200px;" width="200px;" src="images/upload/<?php echo $result["Pic"]; ?>" ></center></td>
    <td align="center"><?php echo $result["TreeName"];?></td>
<!--     <td align="center"><?php echo $result["SciName"];?></td>
 -->    <td align="center"><?php echo $result["Type_Name"];?></td>
    <td class="visible-lg" align="center"><img src="genqr.php?name=<?php echo $result['Tree_ID'];?>"></td>
    <td align="center">
<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="รายละเอียด" onClick="location.href='tree-detail.php?ID=<?php echo $result["Tree_ID"];?>'"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไข" onclick='window.location = "edit-tree.php?ID=<?php echo $result["Tree_ID"];?>"'> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="ลบ" onclick='JavaScript:if(confirm("คุณต้องการจะลบข้อมูลนี้จริงหรือไม่?")==true){window.location = "deleterecord/delete-tree.php?ID=<?php echo $result["Tree_ID"];?>"}'> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
</div></td>
  </tr>
<?php 
}
?>
</table>
<br>
<!-- </div>  -->

<?php
 $sql2 = "SELECT * FROM Tree ";
 $query2 = mysqli_query($conn, $sql2);
 $total_record = mysqli_num_rows($query2);
 $total_page = ceil($total_record / $perpage);
 ?>
 <nav>
 <ul class="pagination">
 <li>
 <a href="main.php?page=1" aria-label="Previous">
 <span aria-hidden="true">&laquo;</span>
 </a>
 </li>
 <?php for($i=1;$i<=$total_page;$i++){ ?>
 <li><a href="main.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 <?php } ?>
 <li>
 <a href="main.php?page=<?php echo $total_page;?>" aria-label="Next">
 <span aria-hidden="true">&raquo;</span>
 </a>
 </li>
 </ul>
 </nav>
 <?php
$conn->close();
?> 
    </content>  
<hr>
<?php foot(); ?> 
 </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>