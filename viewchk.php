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

    <title>Signin Template for Bootstrap</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>

  <body>
<?php 
  $sql = "SELECT * FROM checkin ORDER BY ST_Code ASC";
  $query = mysqli_query($conn, $sql); 
 ?>
<div class="container">
<table border="1" style="margin: 30px">
  <tr>
    <td width="5%">ลำดับ</td>
    <td width="20%">รหัสนักศึกษา</td>
    <td width="30%">ชื่อ-นามสกุล</td>
    <td width="30%">เวลาเข้าร่วม</td>
  </tr>
<?php
$i=0;
    echo mysqli_error($conn);
  while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
 $i++;    
?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $result['ST_Code']; ?></td>
    <td><?php echo $result['ST_Name']; ?></td>
    <td><?php echo $result['Timein']; ?></td>
  </tr>
<?php 
}
$conn->close();
?>
</table>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>