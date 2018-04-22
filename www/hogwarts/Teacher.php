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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO point (idstudent, idteacher, reason, points, house) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idstudent'], "int"),
                       GetSQLValueString($_POST['idteacher'], "int"),
                       GetSQLValueString($_POST['reason'], "text"),
                       GetSQLValueString($_POST['points'], "int"),
                       GetSQLValueString($_POST['house'], "text"));

  mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
  $Result1 = mysql_query($insertSQL, $Hogwartskobling) or die(mysql_error());

  $insertGoTo = "Teacher.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO teacher (idteacher, firstname, middlename, lastname, password) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idteacher'], "int"),
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['middlename'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
  $Result1 = mysql_query($insertSQL, $Hogwartskobling) or die(mysql_error());

  $insertGoTo = "Teacher.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Points = "SELECT point.point, point.house, point.idstudent, point.idteacher, point.reason, point.points FROM point";
$Points = mysql_query($query_Points, $Hogwartskobling) or die(mysql_error());
$row_Points = mysql_fetch_assoc($Points);
$totalRows_Points = mysql_num_rows($Points);

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_house = "SELECT house.house FROM house";
$house = mysql_query($query_house, $Hogwartskobling) or die(mysql_error());
$row_house = mysql_fetch_assoc($house);
$totalRows_house = mysql_num_rows($house);

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Students = "SELECT student.idstudent, student.firstname, student.middlename, student.lastname, student.house FROM student";
$Students = mysql_query($query_Students, $Hogwartskobling) or die(mysql_error());
$row_Students = mysql_fetch_assoc($Students);
$totalRows_Students = mysql_num_rows($Students);

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Housepoints = "SELECT point.house, SUM(point.points) FROM point";
$Housepoints = mysql_query($query_Housepoints, $Hogwartskobling) or die(mysql_error());
$row_Housepoints = mysql_fetch_assoc($Housepoints);
$totalRows_Housepoints = mysql_num_rows($Housepoints);

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Teacher = "SELECT teacher.idteacher, teacher.firstname, teacher.middlename, teacher.lastname, teacher.password FROM teacher";
$Teacher = mysql_query($query_Teacher, $Hogwartskobling) or die(mysql_error());
$row_Teacher = mysql_fetch_assoc($Teacher);
$totalRows_Teacher = mysql_num_rows($Teacher);

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Teachertable = "SELECT teacher.idteacher, teacher.firstname, teacher.middlename, teacher.lastname FROM teacher";
$Teachertable = mysql_query($query_Teachertable, $Hogwartskobling) or die(mysql_error());
$row_Teachertable = mysql_fetch_assoc($Teachertable);
$totalRows_Teachertable = mysql_num_rows($Teachertable);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teacher</title>
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

div.a  {
width: 300px;
height: 163px; 
border-width:1px;
border:solid;
border-color: gray;
background-color: white;
box-shadow: 3px 3px 3px 3px rgb(150,150,150);
font-color:lightgray; font-family: Arial, Helvetica, sans-serif;
font-size:14px;
text-align: center;
margin: auto;	
}
div.b  {
width: 320px;
height: 163px; 
border-width:1px;
border:solid;
border-color: gray;
background-color: white;
box-shadow: 3px 3px 3px 3px rgb(150,150,150);
font-color:lightgray; font-family: Arial, Helvetica, sans-serif;
font-size:14px;
text-align: center;
margin: auto;	
}
</style>

</head>

<body>
<h1>Teacherpage</h1>
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
<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
<div class="b">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Firstname:</td>
      <td><input type="text" name="firstname" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Middlename:</td>
      <td><input type="text" name="middlename" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Lastname:</td>
      <td><input type="text" name="lastname" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Password:</td>
      <td><input type="text" name="password" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Add teacher"></td>
    </tr>
  </table>
  </div>
  <input type="hidden" name="idteacher" value="">
  <input type="hidden" name="MM_insert" value="form2">
</form>
<br>
<table border="1" id="table">
  <tr>
    <td>Idteacher</td>
    <td>Firstname</td>
    <td>Middlename</td>
    <td>Lastname</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Teachertable['idteacher']; ?></td>
      <td><?php echo $row_Teachertable['firstname']; ?></td>
      <td><?php echo $row_Teachertable['middlename']; ?></td>
      <td><?php echo $row_Teachertable['lastname']; ?></td>
    </tr>
    <?php } while ($row_Teachertable = mysql_fetch_assoc($Teachertable)); ?>
</table>
<br>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
<div class="a">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Idstudent:</td>
      <td><input type="text" name="idstudent" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Idteacher:</td>
      <td><input type="text" name="idteacher" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Reason:</td>
      <td><input type="text" name="reason" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Points:</td>
      <td><input type="text" name="points" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">House:</td>
      <td><select name="house">
        <?php 
do {  
?>
        <option value="<?php echo $row_house['house']?>" ><?php echo $row_house['house']?></option>
        <?php
} while ($row_house = mysql_fetch_assoc($house));
?>
      </select></td>
    <tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Give points"></td>
    </tr>
  </table>
</div>  
  <input type="hidden" name="MM_insert" value="form1">
</form>
<br>
<br>
<table border="1" id="table">
  <tr>
    <td>Idstudent</td>
    <td>Firstname</td>
    <td>Middlename</td>
    <td>Lastname</td>
    <td>House</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Students['idstudent']; ?></td>
      <td><?php echo $row_Students['firstname']; ?></td>
      <td><?php echo $row_Students['middlename']; ?></td>
      <td><?php echo $row_Students['lastname']; ?></td>
      <td><?php echo $row_Students['house']; ?></td>
    </tr>
    <?php } while ($row_Students = mysql_fetch_assoc($Students)); ?>
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

mysql_free_result($house);

mysql_free_result($Students);

mysql_free_result($Housepoints);

mysql_free_result($Teacher);

mysql_free_result($Teachertable);
?>
