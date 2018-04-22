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
$query_Points = "SELECT point.idstudent, point.house, point.reason, point.points, point.idteacher FROM point";
$Points = mysql_query($query_Points, $Hogwartskobling) or die(mysql_error());
$row_Points = mysql_fetch_assoc($Points);
$totalRows_Points = mysql_num_rows($Points);

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Housepoints = "SELECT point.house, SUM(point.points) FROM point";
$Housepoints = mysql_query($query_Housepoints, $Hogwartskobling) or die(mysql_error());
$row_Housepoints = mysql_fetch_assoc($Housepoints);
$totalRows_Housepoints = mysql_num_rows($Housepoints);
$query_Points = "SELECT point.idstudent, point.house, point.reason, point.points, point.idteacher FROM point";
$Points = mysql_query($query_Points, $Hogwartskobling) or die(mysql_error());
$row_Points = mysql_fetch_assoc($Points);
$totalRows_Points = mysql_num_rows($Points);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student-points</title>
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
background-color: #FFEFD5; 
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
}	

</style>

</head>

<body>
<body>
<h1>Points</h1>
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
    <td>Idstudent</td>
     <td>Idteacher</td>
    <td>House</td>
    <td>Reason</td>
    <td>Points</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Points['idstudent']; ?></td>
      <td><?php echo $row_Points['idteacher']; ?></td>
      <td><?php echo $row_Points['house']; ?></td>
      <td><?php echo $row_Points['reason']; ?></td>
      <td><?php echo $row_Points['points']; ?></td>
    </tr>
    <?php } while ($row_Points = mysql_fetch_assoc($Points)); ?>
</table>
<br>
<br>
<table border="1" id="table">
  <tr>
    <td>House</td>
    <td>Points</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Housepoints['house']; ?></td>
      <td><?php echo $row_Housepoints['SUM(point.points)']; ?></td>
    </tr>
    <?php } while ($row_Housepoints = mysql_fetch_assoc($Housepoints)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Points);

mysql_free_result($Housepoints);
?>
