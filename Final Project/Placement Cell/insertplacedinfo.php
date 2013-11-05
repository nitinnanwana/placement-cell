<?php
$connect=mysql_connect("localhost","root","") or die("didn't connect");
mysql_select_db("dummy") or die("can't find database");

$sname=$_POST["sname"];
$rollnumber=$_POST["rollnumber"];
$cname=$_POST["cname"];
$package=$_POST["package"];


$query1 = "INSERT INTO placementstatus (";
$query1 .="sname, rollnumber,cname, package";
 $query1 .=" ) VALUES (";
 $query1 .=" '$sname','$rollnumber','$cname','$package'";
 $query1 .=")";
 $result = mysql_query($query1);
 if($result)
 {
  echo"success";
  } 
  else
     echo"not success";
	 
?>