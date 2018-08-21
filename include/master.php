<?php
function chkLogin(){
	session_start();
if (!@isset($_SESSION[login])) {
     header("Location: index.php");
     exit;
}
}
function head(){
// session_start();
// if (!@isset($_SESSION[login])) {
//      header("Location: index.php");
//      exit;
// }
	echo ' 
	<div class="page-header">
            <h1><font color="#08af00"><center><u>ระบบสารสนเทศพันธุ์ไม้โดยใช้คิวอาร์โค้ด</u></center></font></h1>
            <h1><font color="#08af00"><center><u>Information System of Plants by Using QR Code</u></center></font></h1>
    </div>
            ';

	}

function nav() {
	echo'	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">';?>
					<?php if (!@isset($_SESSION[login])) { 
						echo'
						<li><a href="index.php" >หน้าหลัก</a></li>
						<li><a href="about.php" >เกี่ยวกับ</a></li> 
						</ul>
							<form class="navbar-form navbar-right" method="post" action="include/check_login.php">
        						<div class="form-group">
									<font color="#FFF" >ชื่อผู้ใช้ : </font><input type="text" class="form-control" name="txtUsername">
									<font color="#FFF" >รหัสผ่าน : </font><input type="password" class="form-control" name="txtPassword">
									<button type="submit" class="btn btn-success">LOGIN</button>
								</div>
							</form>';
					}
						else{ echo '
						<li><a href="main.php" >หน้าหลัก</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">จัดการเว็บไซต์ <span class="caret"></span></a>
					  	<ul class="dropdown-menu">
							<li><a href="add-tree.php" >เพิ่มต้นไม้</a></li>   
							<li><a href="addtype.php" >เพิ่มประเภท</a></li>   
						</ul>
						</li>
						<li><a href="about.php" >เกี่ยวกับ</a></li> 
						</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								  	<span >ชื่อผู้ใช้งาน : '; ?>
								  	<?php echo $_SESSION["User_Name"],

									' </span><span class="caret"></span></a>
								  <ul class="dropdown-menu">
									<li><a href="personal_detail.php">ข้อมูลส่วนตัว</a></li>
									<li><a href="include/logout.php">ออกจากระบบ</a></li>
									<!--<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>-->
								  </ul>
								</li>
							</ul>';
						}
	      			echo'
	      			</div>
				</div>
			</nav>';
}
?>
<?php
function sidebar(){
	echo'
		<div class="col-md-2 col-sm-2 visible-lg" style="margin:0px !important; padding:0px !important; background:#c6c6c6;">
        	<div class="sidebar">
            	<!-- Widget -->
                	<div class="widget">
									 <li><i class="fa fa-home"></i>  <a href="#">ชื่อ Login Name</a></li>
									 <li><i class="fa fa-file-photo-o"></i> <a href="#">ข้อมูลส่วนตัว</a></li>
									 <li><i class="fa fa-unlock-alt "></i>  <a href="#">เปลี่ยนรหัสผ่าน</a></li>
									 <li><i class="fa fa-power-off "></i> <a href="login.php">ออกจากระบบ</a></li>
                    </div>
            	</div> 
		</div>';
						
						
}
function foot() {
	echo '<div class="visible-lg"> 
        <div class="row">
            <div class="col-lg-4">
                <img align="right" src="images/pnru_logo.png" style="width: 50%;">
            </div>
            <div class="col-lg-4"><br>
	            <font color="#08af00" size="+1" ><center>
	                <b><u>จัดทำโดย</u></b><br>
	                นางสาวทัศนีย์  ทองชั่ง   5730122113008<br>
	                นายณัฐพล  จำลองราษฎร์   5730122113025<br>
	                สาขาเทคโนโลยีสารสนเทศ<br>
	                คณะวิทยาศาสตร์และเทคโนโลยี<br>
	                มหาวิทยาลัยราชภัฎพระนคร</center>
	            </font>    
            </div>
            <div class="col-lg-4">
                <img src="images/logo.png" style="width: 70%;">
            </div>
        </div>
    </div>
    ';
}
