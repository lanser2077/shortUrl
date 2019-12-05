<?php
$words = explode(' ', $_SERVER['REQUEST_URI']);
$showword = trim($words[count($words) - 1], '/');


preg_match("/[^\/]+$/", $showword, $matches);
$last_word = $matches[0];

echo $last_word;
  
$con = mysql_connect("127.0.0.1","root","9ee0f1cdb45ffeeb");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db1", $con);
$result = mysql_query("SELECT * FROM usedLink where keyword = '$last_word' order by id DESC limit 1");

while($row = mysql_fetch_array($result))
  {
  header("Location: ".$row['link']);
  }

mysql_close($con);
?>