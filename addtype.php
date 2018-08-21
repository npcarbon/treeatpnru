<?php
include'include/master.php';
include'include/condb.php';
chkLogin();
?>
<!doctype html>
<html lang="en">
  <head>
		<meta http-equiv="content-type" content="text/html; charset=utf8">
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

<script src="ckeditor/ckeditor.js"></script>
<style type="text/css">
body { 
    background-image: url('images/BG1.jpg');
    background-repeat: no-repeat;
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

}
.box {
                height: 95%;
                width: 100%;
                margin: 15px;
                padding: 15px;
                border: 1px solid #ccc;
            }
            .top {
                box-shadow: 0 -5px 5px -5px #333;
            }
            .right {
                box-shadow: 5px 0 5px -5px #333;
            }
            .bottom {
                box-shadow: 0 5px 5px -5px #333;
            }
            .left {
                box-shadow: -5px 0 5px -5px #333;
            }
            .all {
                box-shadow: 0 0 5px #333;
            }
</style>
  </head>
	<body> 
<div class="container">    
    <div class="transbox" style="background: #FFF;">  
        <div class="visible-lg"> 
<?php head(); ?>  <br>
<?php nav(); ?>
</div>
        <content>  

                <form  action="saverecord/savetype.php" method="post" name="mainfrm" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="box all">
                            <label for="exampleInputEmail1">ประเภท</label>
                            <input type="text" class="form-control" name="txtName" style="width:450px;" autofocus>
                            <br>
                            <button type="submit" class="btn btn-primary">บันทึก</button>

                        </div>
                    </div>
                </div>
                </form>
            
        </content>   
<?php foot(); ?>    
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>