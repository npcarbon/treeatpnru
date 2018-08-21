<?php
include'include/master.php';
include'include/condb.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>เพิ่มโครงการนักศึกษา 2/2560</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>

  <body>

    <div class="container">

      <form class="form-signin" name="chkfrm" method="post" action="saverecord/saveproject.php">
        <h2 class="form-signin-heading">โครงการนักศึกษา 2/2560</h2><br>
        <label for="inputStdCode" class="sr-only">รหัสนักศึกษา</label>
        <input type="text" class="form-control" placeholder="รหัสนักศึกษา" name="txtCode" required autofocus>
        <label for="inputName" class="sr-only">ชื่อ-นามสกุล</label>
        <input type="text" class="form-control" placeholder="ชื่อ-นามสกุล" name="txtName" required>
        <label for="inputProName" class="sr-only">ชื่อโครงการนักศึกษา</label>
        <input type="text" class="form-control" placeholder="ชื่อโครงการนักศึกษา" name="txtProname" required>

        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
      </form>
      <center>
<a href='viewproject.php'>เรียกดูรายชื่อและโครงการนักศึกษา</a>
</center>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>