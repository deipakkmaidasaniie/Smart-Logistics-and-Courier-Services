<?php

  
error_reporting(1);
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier';

$conn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('mysqli connect failed. ' . mysqli_error());
mysqli_select_db($conn,$dbName) or die('Cannot select database. ' . mysqli_error());

//$conn = new mysqli("localhost","root","","courier");
function dbQuery($sql)
{
	global $conn;
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

	return $result;
}

function dbAffectedRows()
{
	global $conn;

	return mysqli_affected_rows($conn);
}

function dbFetchArray($result, $resultType = mysqli_NUM) {
	return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result)
{
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	return mysqli_select_db($dbName);
}

function dbInsertId()
{
	return mysqli_insert_id();
}
?>



