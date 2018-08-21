
<?php
$servername = "localhost";
$username = "ajsunant_01";
$password = "r00B9xnY8c";
$dbname = "ajsunant_01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//ใส่โค๊ดด้านล่างนี้เพื่อทำให้ Query ข้อมูลออกมาเป็นภาษาไทย
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8_unicode_ci");
mysql_query("collation_database = utf8_unicode_ci");
mysql_query("collation_server = utf8_unicode_ci");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





