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
		<title>ระบบคลังข้อมูลพันธุ์ไม้ภายในราชภัฎพระนคร</title>
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
<?php
   $strID = null;

   if(isset($_GET["ID"]))
   {
     $strID = $_GET["ID"];
   }
 $sql = "SELECT * FROM Tree
 WHERE Tree_ID = '".$strID."' ";
 $query = mysqli_query($conn, $sql);
 echo mysqli_error($conn);
 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
  </head>
	<body> 
    <div class="container">    
<div class="visible-lg"> 
            <div class="transbox" style="background: #d8d8d8;">  
<?php head(); ?>  <br>
<?php nav(); ?>
</div></div> 
        <content>  
            <div class="transbox" style="background: #d8d8d8;">
                <form  action="editrecord/edittree.php" method="post" name="mainfrm">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="box all">
                            <input type="hidden" name="txtID" value="<?php echo $result["Tree_ID"];?>">
                            <label for="exampleInputEmail1">ชื่อพันธุ์ไม้</label>
                            <input type="text" class="form-control" name="txtName" value="<?php echo $result['TreeName'];?>" style="width:450px;">
                  
                  
                            <label for="exampleInputPassword1">ชื่อทางวิทยาศาสตร์</label>
                            <input type="text" class="form-control" name="txtSciName" value="<?php echo $result['SciName'];?>" style="width:450px;">

                            <label for="exampleInputPassword1">ประเภท </label>
                            <select name="txtType" required class="form-control" style="width:300px;">
                                 <option value="">เลือกปรเภท</option>
                                    <?php
                                        $sql = "SELECT * FROM Type ORDER BY Type_ID ASC";
                                        $query = mysqli_query($conn,$sql);
                                        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                                    ?>
                                   
                                    <option value="<?= $result["Type_ID"];?>"> <?= $result["Type_Name"];?> </option>
                                  <?php  
                                    }
                                  ?>
                               </select>

                            <label for="exampleInputPassword1">ข้อมูลต้นไม้</label>

                            <textarea name="detail" id="detail" ><?php echo $result["detail"]; ?></textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace('detail');
                                    function CKupdate() {
                                        for (instance in CKEDITOR.instances)
                                            CKEDITOR.instances[instance].updateElement();
                                    }
                                </script>
                            
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-lg-11">
                        <div class="box all" style="height: 200px !important;">
                            <label for="exampleInputFile">รูปภาพ</label>
                            <input type="file" name="filUpload"><br><br><br>
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                          
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </content>   
<?php foot(); ?>    
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>