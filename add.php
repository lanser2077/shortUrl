<?php
$keyword = $_POST['keyword'];
$link = $_POST['link'];
$server_name =  $_SERVER['SERVER_NAME'];
$con = mysql_connect("127.0.0.1","root","e88f66be56f0c56a");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db1", $con);
$sql = "insert into usedLink values (null,'$link','$keyword',1)";
$result = mysql_query($sql);
echo "<html>";
echo "<head><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"></head><body>";

if($result) echo "成功！您的链接：<br/>http://$server_name/$keyword<br/>";
else echo "创建失败fail";
echo "</body></html>";
mysql_close($con);
?>