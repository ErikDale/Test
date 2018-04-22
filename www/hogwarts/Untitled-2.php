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

  $insertGoTo = "Untitled-2.php";
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
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Points);

mysql_free_result($house);
?>
