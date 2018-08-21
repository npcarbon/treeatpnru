<?php
include('../phpqrcode/qrlib.php'); 
$host="http://aj-sunanta.com";
 QRcode::png($host."/treeatpnru/tree-detail.php?ID=".$_GET['name']);
// header("/tree-detail.php?ID=".$_GET['name']);
//QRcode::png('PHP QR Code :)');
?>