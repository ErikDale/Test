<?php require_once('Connections/Hogwartskobling.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Student = "SELECT student.idstudent, student.firstname, student.middlename, student.lastname, student.house FROM student";
$Student = mysql_query($query_Student, $Hogwartskobling) or die(mysql_error());
$row_Student = mysql_fetch_assoc($Student);
$totalRows_Student = mysql_num_rows($Student);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student</title>
<style>
#table   {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;background-color: #999;
color: white;
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

body {
margin: 0;
}

ul {
margin: 0; 
}


#menu ul {
background-color: #999;
height: 50px;
position: relative;   	
}

#menu ul li {
font-family:Arial, Helvetica, sans-serif;
font-size: 14px;
line-height: 50px;
color:#FFF;
display: inline;
margin: 0px 46.5px;
}

#menu ul li a {
color: #FFF;
text-decoration: none;
}



#menu ul li a:hover {
background-color: #333;
}
.dropbutton   {
background-color: #999;
height: 50px;
width: 120px; 
position: relative; 
color: #FFF;
cursor: pointer; 	
}
.dropdown  {
position: relative;
display: inline-block; 
width: 120px; 
}
.dropdown-content  {
display: none;
position: absolute;	
background-color: #999;
height: 50px;
width: 120px; 
float: left;
z-index: 1;
text-align: center; 
}

.dropdown-content a  {
color: #FFF;
text-decoration: none; 
}
.dropdown-content a:hover  {
background-color: #333;
}
.dropdown:hover .dropdown-content {
display: block;
}
.dropdown:hover .dropbutton {background-color: #333;
}

h1  {
font-family: Arial, Helvetica, sans-serif; 
text-align: center; 
font-size: 30px; 
text-decoration: none;
color: #000;	
}
a    {
text-decoration: none;		
}
</style>
</head>

<body>
<h1>Studentpage</h1>
<div id="menu"> 
  <ul>
 
<li><a href="Home.php">Home</a>
</li>
    <li><a href="Gryffindor.php">Gryffindor</a></li>
    <li><a href="Slytherin.php">Slytherin</a></li>
    <li><a href="Hufflepuff.php">Hufflepuff</a></li>
    <li><a href="Ravenclaw.php">Ravenclaw</a></li>
    <li><a href="Regulations.php">Regulations</a></li>
    <li><a href="Quidditch.php">Quidditch</a></li> 
<div class="dropdown">
  <button class="dropbutton">Teacher/Student</button>
  <div class="dropdown-content">
    <a href="Student.php">Student</a>
    <br>
    <a href="Teacher-login.php">Teacher</a>
   
  </div>
</div>
</ul>
</div>  
<br>
<br>
<table border="1" id="table">
  <tr>
    <td>idstudent</td>
    <td>firstname</td>
    <td>middlename</td>
    <td>lastname</td>
    <td>house</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Student['idstudent']; ?></td>
      <td><?php echo $row_Student['firstname']; ?></td>
      <td><?php echo $row_Student['middlename']; ?></td>
      <td><?php echo $row_Student['lastname']; ?></td>
      <td><?php echo $row_Student['house']; ?></td>
    </tr>
    <?php } while ($row_Student = mysql_fetch_assoc($Student)); ?>
</table>
<br>
<br>

<a href="Student-point.php"><h1>Points given/taken</h1></a>


</body>
</html>
<?php
mysql_free_result($Student);
?>
