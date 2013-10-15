<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Tue, 15 Oct 2013 02:19:27 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>nitin</title>
    
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
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style>
h1
{
text-shadow: 5px 5px 5px #FF0000;
}
</style>
  </head>
  
  <body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $name = test_input($_POST["name"]);
   $rollno = test_input($_POST["rollno"]);
   $specialization = test_input($_POST["specialization"]);
   $course = test_input($_POST["course"]);
   $cgpa = test_input($_POST["cgpa"]);
   $email = test_input($_POST["email"]);
   $gender = test_input($_POST["gender"]);
   $description = test_input($_POST["description"]);
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h1>Registration for Placement</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
   Name: <input type="text" name="name">
   <br><br>
   RollNo: <input type="text" name="rollno">
   <br><br>
   Specialization: <input type="text" name="specialization">
   <br><br>
   Course: <input type="text" name="course">
   <br><br>
   CGPA: <input type="text" name="cgpa">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Description: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>
 </body>
</html>