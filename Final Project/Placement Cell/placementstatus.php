<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Mon, 21 Oct 2013 18:28:40 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
      <style type="text/css">
    <!--
    body {
      color:#00000;
      background-color:#00FFFF;
    }
    a  { color:#0000FF; }
    a:visited { color:#800080; }
    a:hover { color:#008000; }
    a:active { color:#FF0000; }
    -->
    </style>
	<style>
h1
{
text-shadow: 5px 5px 5px #FF0000;
}
</style>
<h1>Here Is The Current Status Of Placements</h1>
<a href="placementinfo.php"><h2>Enter The Details Of The Placed Students</h2></a>
  </head>
  <body>
<?php
$connect=mysql_connect("localhost","root","") or die("didn't connect");
    mysql_select_db("dummy") or die("can't find database");
 $query = mysql_query("SELECT * FROM placmentstatus");
 $result = mysql_num_rows($query);
	if($result)
	{
	    print "<table border=2 align=left>";
		print "<tr>";
		print"<td>name</td><td>Roll no</td><td>company name</td><td>Package</td>";
		print"</tr>";
		
	   while($row=mysql_fetch_assoc($query))
		 {
           	print"<tr>";
            			
			 print "<td>$row[sname]</td>";
			 //print "&nbsp&nbsp&nbsp&nbsp&nbsp";
			 print "<td>$row[rollnumber]</td>";
			  //print "&nbsp&nbsp&nbsp&nbsp&nbsp";
			 print "<td>$row[cname]</td>"; //print "&nbsp&nbsp&nbsp&nbsp&nbsp";
			 print "<td>$row[package]</td></tr>";
			 
			 
		}
		print"</table>";
	}
?>
  </head>
  <body>
<img src="2789810964_b3f685c3c2.jpg" width="500" height="375" alt="" title="" border="0" align="right" />

  </body>
</html>