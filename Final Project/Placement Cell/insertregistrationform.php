<?php
$connect=mysql_connect("localhost","root","") or die("didn't connect");
mysql_select_db("dummy") or die("can't find database");

$name=$_POST["name"];
$rollno=$_POST["rollno"];
$specialization=$_POST["specialization"];
$course=$_POST["course"];
$cgpa=$_POST["cgpa"];
$email=$_POST["email"];
$description=$_POST["comment"];
$gender=$_POST["gender"];


$query1 = "INSERT INTO register (";
$query1 .="name, rollno, specialization, course, cgpa, email, description, gender";
 $query1 .=" ) VALUES (";
 $query1 .=" '$name','$rollno','$specialization','$course','$cgpa','$email','$description','$gender'";
 $query1 .=")";
 $result = mysql_query($query1);
 if($result)
 {
  echo"success";
  } 
  else
     echo"not success";

?>