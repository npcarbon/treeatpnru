<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="write_article.js"></script>
        <style type="text/css">
        body{background: #f2f2f2;margin:50px auto 0px auto;width:550px;}
        </style>
    </head>
    <body>
        
<div style="border:1px solid #999999;">
<div style="background: #B2E9F4;border:5px solid #dddddd;padding:20px;">
 
<form name="myform" method="post" action="write_article_sql.php">
 
<div>Author: <input style="width:200px;" name="author" id="author" type="text"></div>
 
<div>Title: <input style="width:350px;" name="title" id="title" type="text"></div>
 
<div><textarea name="editor1" id="editor1" cols="50" rows="10"></textarea></div>
 
<div><input name="submit" value="บันทึก" type="submit"></div>
 
<script type="text/javascript">
CKEDITOR.replace('editor1', {
skin   : 'kama', //กำหนดรูปแบบหน้าตา
height   : 200, //กำหนดความสูง
width    : 500,//กำหนดความกว้าง
toolbar: 'Myck' //เรียกใช้งาน ckeditor จากไฟล์ config.js
});
</script>
 
</form>
</div>
</div>

    </body>
    </html>