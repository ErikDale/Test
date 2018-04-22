<?php require_once('Connections/sitatkobling.php'); ?>
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

mysql_select_db($database_sitatkobling, $sitatkobling);
$query_sitater2 = "SELECT idsitat, tekst FROM sitat";
$sitater2 = mysql_query($query_sitater2, $sitatkobling) or die(mysql_error());
$row_sitater2 = mysql_fetch_assoc($sitater2);
$totalRows_sitater2 = mysql_num_rows($sitater2);

mysql_select_db($database_sitatkobling, $sitatkobling);
$query_sitatside2 = "SELECT sitat.tekst, person.navn FROM person, sitat WHERE sitat.idperson";
$sitatside2 = mysql_query($query_sitatside2, $sitatkobling) or die(mysql_error());
$row_sitatside2 = mysql_fetch_assoc($sitatside2);
$totalRows_sitatside2 = mysql_num_rows($sitatside2);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table border="1">
  <tr>
    <td>tekst</td>
    <td>navn</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_sitatside2['tekst']; ?></td>
      <td><?php echo $row_sitatside2['navn']; ?></td>
    </tr>
    <?php } while ($row_sitatside2 = mysql_fetch_assoc($sitatside2)); ?>
</table>
<table border="1">
  <tr>
    <td>idsitat</td>
    <td>tekst</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_sitater2['idsitat']; ?></td>
      <td><?php echo $row_sitater2['tekst']; ?></td>
    </tr>
    <?php } while ($row_sitater2 = mysql_fetch_assoc($sitater2)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($sitater2);

mysql_free_result($sitatside2);
?>
