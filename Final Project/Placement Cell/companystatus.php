<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Thu, 17 Oct 2013 23:41:52 GMT">
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
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
<h1>THE WORLD OF YOUR DREAM COMPANIES</h1>
<a href="companyinfo.php"><h2>Enter the Company Details</h2></a>
<?php
    $connect=mysql_connect("localhost","root","") or die("didn't connect");
    mysql_select_db("dummy") or die("can't find database");
	$dt=date('d:m:y');
	echo "Todays Date";
	echo "<br>";
	echo $dt;
	echo "<br>";
	echo "<br>";
	echo"Comopanies Next To Visit Campus";
	echo"<br>";
	echo "<br>";
    $query = mysql_query("SELECT * FROM companystatus");
	$result = mysql_num_rows($query);
	if($result)
	{
	    print "<table border=2 align=left>";
		print "<tr>";
		print"<td>company ID</td><td>Company Name</td><td>Date Of Visit</td>";
		print"</tr>";
		
	     while($row=mysql_fetch_assoc($query))
		 {
		 print"<tr>";
		     print "<td>$row[cid]</td> ";
			 print "<td>$row[cname]</td>";
			 print "<td>$row[date]</td></tr>";
			
		 }
	}	
    else
	   echo"no found";
?>

<img src="2789810964_b3f685c3c2.jpg" width="500" height="375" alt="" title="" border="0" align="right" />
 
  </body>
</html>