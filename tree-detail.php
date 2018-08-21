<?php
include'include/master.php';
include'include/condb.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF8">
		<!-- Title here -->
		<!-- TemplateBeginEditable name="doctitle" -->
		<title>Information System of Plants using by QR Code</title>
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
    background-attachment: scroll;
}
td {
 padding:3px; 
}
/*@font-face {
    font-family: "Tahoma";
	font-size: 12px;
}*/
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

}

</style>
  </head>
	<body> 
<div class="container">    
  <div class="transbox" style="background: #FFF;">  
    <div class="visible-lg"> 
<?php head(); ?>  <br>
  </div>
<?php nav(); ?>

<?php
   $strID = null;

   if(isset($_GET["ID"]))
   {
     $strID = $_GET["ID"];
   }

 $sql = "SELECT * FROM Tree 
 INNER JOIN Type ON Tree.Type = Type.Type_ID
 WHERE Tree_ID = '".$strID."' ";
 $query = mysqli_query($conn, $sql);
 echo mysqli_error($conn);
 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>    

    <content>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                  <h1><font color="#08af00" FACE="AngsanaUPC"><b>ต้น<?php echo $result["TreeName"];?></b></font></h1>
                    <img class="img-rounded" src="images/upload/<?php echo $result["Pic"]; ?>" width="80%">
                </div>
                <div class="col-lg-7">
                    <h4>                    
                    <font color="#08af00" FACE="AngsanaUPC"><b>ประเภทของต้นไม้ : </b></font>
                    <font FACE="AngsanaUPC"><?php echo $result["Type_Name"];?><br><br></font>
                    <font color="#08af00" FACE="AngsanaUPC"><b>ชื่อทางวิทยาศาสต์ : </b></font>
                    <font FACE="AngsanaUPC"><?php echo $result["SciName"];?><br><br></font>
                    <font color="#08af00" FACE="AngsanaUPC"><b>รายละเอียด/ข้อมูลของต้นไม้</b><br></font>
                    <font FACE="AngsanaUPC"><?php echo $result["Tree_Detail"];?><br></font>
                    </h4>
                    <center>
<!--                     <h2><font color="#08af00" FACE="AngsanaUPC"><a href="https://goo.gl/84Rzxh" >กรุณาประเมินระบบ</a></font></h2>
 -->                    </center>
                </div>
                <div class="col-lg-4">
                    <center>
                      <h2><font color="#08af00" FACE="AngsanaUPC"><b><u><i>QR Code</i></u></b></font></h2>
                      <img src="genqr.php?name=<?php echo $result['Tree_ID'];?>" width="50%">
                    </center>
                </div>
            </div>
        </div>
        <div align="right"><font size="1">บทความเมื่อ <?php echo $result["CreateDate"];?></font> </div>
    </content>  


<hr>
<?php foot(); 
$conn->close();?> 
</div>
 
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>