<?php

$cid = $_POST["cid"];
$cname = $_POST["cname"];
//$package = $_POST["package"];
$date = $_POST["date"];

$connect=mysql_connect("localhost","root","") or die("didn't connect");
mysql_select_db("dummy") or die("can't find database");


$query1 = "INSERT INTO companystatus (";
$query1 .="cid, cname, date";
 $query1 .=" ) VALUES (";
 $query1 .=" '$cid','$cname','$date'";

 $query1 .=")";
 $result = mysql_query($query1);
 if($result)
 {
  echo"success";
  } 
  else
     echo"not success";

?>