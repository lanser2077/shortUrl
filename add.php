<?php
function makeKeyword($j){
	$list=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0");
	for ($i = 0; $i < 62; $i++) { 
		    if($i==$j){
		    	return $list[$i];
		    }
	}
}
$stringline = "";
for ($i = 0; $i <= 5; $i++) {
     		$j = rand(1,62);
     		$tmp = makeKeyword($j-1);
     		$stringline = $stringline.$tmp;
}

echo $stringline;

$keyword = $stringline;
$link = $_POST['link'];
$server_name =  $_SERVER['SERVER_NAME'];
$con = mysql_connect("127.0.0.1","root","9ee0f1cdb45ffeeb");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db1", $con);
$sql = "insert into usedLink values (null,'$link','$keyword',1)";
$result = mysql_query($sql);
echo "<html>";
echo "<head><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"></head><body>";

if($result) echo "<br/><h1>成功！您的链接：http://$server_name/$keyword</h1><br/>";
else echo "创建失败fail";
echo "</body></html>";
mysql_close($con);
?>