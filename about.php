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
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: top center;
    background-size: auto;
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
<?php nav(); ?>
  </div>

    <content>
        <div class="container">
          <div class="col-lg-11">
<dl>
  <dt></dt>
  <h4>
<p><dd>มหาวิทยาลัยราชภัฏพระนครนั้นเป็นสถาบันที่ก่อตั้งมานานถึง 125 ปี และในปัจจุบันมหาวิทยาลัยราชภัฏพระนครมีบรรยากาศที่ร่มรื่น สวยงาม มีพันธุ์ไม้ต่างๆ มากมายรอบมหาวิทยาลัย ซึ่งมีต้นไม้ที่มีความเก่าแก่มาก แต่นักศึกษานั้นไม่ทราบชื่อต้นไม้ต่างๆ และความสำคัญของต้นไม้ที่มีอยู่เหล่านั้น ซึ่งยังไม่มีการจัดเก็บข้อมูลของพันธุ์ไม้ที่มีอยู่ภายในมหาวิทยาลัยให้เป็นระบบระเบียบ อีกทั้งไม่พบสิ่งบ่งบอกชื่อของพันธุ์ไม้ตามต้นไม้ต่างๆ ภายในมหาวิทยาลัย และยังไม่สามารถอำนวยความสะดวกให้ผู้ที่ต้องการศึกษาหาข้อมูลเกี่ยวกับพันธุ์ไม้เป็นอย่างมาก  (มหาวิทยาลัยราชภัฏพระนคร. ม.ป.ป. : ออนไลน์)</dd></p><br>
  <dt></dt>
<p><dd>จากเหตุผลดังกล่าวข้างต้นนี้ผู้วิจัยจึงมีแนวคิดที่จะพัฒนาระบบสารสนเทศพันธุ์ไม้โดยใช้คิวอาร์โค้ดภายในมหาวิทยาลัยราชภัฏพระนครนี้ขึ้นมาเพื่ออำนวยความสะดวก และรวดเร็วในการศึกษาข้อมูลพันธุ์ไม้ให้แก่ อาจารย์ นักศึกษา บุคลากรของมหาวิทยาลัย และบุคคลทั่วไป โดยการใช้คิวอาร์โค้ดในรูปแบบเว็บแอพพลิเคชั่น ซึ่งมีหลักในการใช้งานอย่างง่ายๆ โดยการใช้โทรศัพท์มือถือที่มีกล้องถ่ายภาพ และสมาร์ทโฟน พร้อมทั้งติดตั้งโปรแกรมสำหรับอ่านรหัสคิวอาร์ ก็สามารถเข้าถึงระบบสารสนเทศข้อมูลของพันธุ์ไม้ได้ทันที อาทิเช่น มีชื่อและสายพันธุ์อะไร มีลักษณะทางพฤกษศาสตร์แบบไหน มีประโยชน์หรือสรรพคุณอย่างไร เป็นต้น</dd></p><br>
  <dt></dt>
</h4>
</dl>
          </div>
        </div>
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