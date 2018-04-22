<?php require_once('Connections/Hogwartskobling.php'); ?>
<?php require_once('Connections/Hogwartskobling.php'); ?>
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO student (idstudent, firstname, middlename, lastname, house) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idstudent'], "int"),
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['middlename'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['house'], "text"));

  mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
  $Result1 = mysql_query($insertSQL, $Hogwartskobling) or die(mysql_error());

  $insertGoTo = "Jacob.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO student (idstudent, firstname, middlename, lastname, house) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idstudent'], "int"),
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['middlename'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['house'], "text"));

  mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
  $Result1 = mysql_query($insertSQL, $Hogwartskobling) or die(mysql_error());

  $insertGoTo = "Jacob.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_Student = "SELECT student.idstudent, student.firstname, student.middlename, student.lastname, student.house FROM student";
$Student = mysql_query($query_Student, $Hogwartskobling) or die(mysql_error());
$row_Student = mysql_fetch_assoc($Student);
$totalRows_Student = mysql_num_rows($Student);

mysql_select_db($database_Hogwartskobling, $Hogwartskobling);
$query_House = "SELECT house.house FROM house";
$House = mysql_query($query_House, $Hogwartskobling) or die(mysql_error());
$row_House = mysql_fetch_assoc($House);
$totalRows_House = mysql_num_rows($House);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
</form>
<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
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
      <td nowrap align="right">House:</td>
      <td><select name="house">
        <?php 
do {  
?>
        <option value="<?php echo $row_House['house']?>" ><?php echo $row_House['house']?></option>
        <?php
} while ($row_House = mysql_fetch_assoc($House));
?>
      </select></td>
    <tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record"></td>
    </tr>
  </table>
  <input type="hidden" name="idstudent" value="">
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Student);

mysql_free_result($House);
?>
